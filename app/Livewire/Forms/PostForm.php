<?php

namespace App\Livewire\Forms;

use App\Enums\MediaType;
use App\Models\Post;
use App\Models\PostMedia;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class PostForm extends Form
{
    use WithFileUploads;

    public ?Post $post;

    #[Validate('required|string')]
    public $title;

    #[Validate('required|string')]
    public $content;

    #[Validate('required|date')]
    public $date;

    #[Validate('nullable|array')]
    public $videos = [];

    #[Validate([
        'images' => 'nullable|array',
        // 'images.*' => 'image|max:1024'
    ])]

    #[Validate('required_if:images,not_empty')]
    public $main_image;


    public $images = [];
    public $video_link;
    public $uploaded_images = [];


    public function setPost(Post $post)
    {
        $this->post = $post;
        $this->title = $this->post->title;
        $this->content = $this->post->content;
        $this->date = $this->post->date;
        $videos = $this->post->videos;
        $images = $this->post->images;
        $this->videos = $videos ? $videos->toArray() : [];
        $this->images = $images ? $images->toArray() : [];
        $this->main_image = $this->post->main_image_url;

    }

    public function uploadVideo()
    {
        $this->validate(['video_link' => 'required|url']);
        $this->videos[] = [
            'id' => null,
            'url' => $this->transformYouTubeUrl($this->video_link),
            'thumbnail_url' => $this->getVideoThumbnail($this->video_link),
        ];
        $this->video_link = '';
    }

    public function uploadImages()
    {
        $this->validate(['uploaded_images.*' => 'nullable|image|max:4024']);
        foreach ($this->uploaded_images as $uploaded_image) {
            $this->images[] = [
                'id' => null,
                'url' => $uploaded_image->storeAs(
                    path: 'post-images',
                    name: $this->sanitizeFileName($uploaded_image->getClientOriginalName())
                ),
            ];
        }
        $this->uploaded_images = [];
    }

    public function store()
    {
        try {
            $validated = $this->validate();
            $validated['date'] = Carbon::parse($validated['date']);
            $post = Post::create($validated);
            foreach ($validated['images'] as $image) {
                PostMedia::create([
                    'post_id' => $post->id,
                    'media_type' => MediaType::Image,
                    'url' => $image['url'],
                    'is_primary' => $image['url'] == $this->main_image,
                ]);
            }
            foreach ($validated['videos'] as $video) {
                PostMedia::create([
                    'post_id' => $post->id,
                    'media_type' => MediaType::Video,
                    'url' => $video['url'],
                    'thumbnail_url' => Arr::get($video, 'thumbnail_url'),
                ]);
            }

            $this->reset();
            session()->flash('message', 'Post salvato con successo!');
        } catch(Exception $exc) {
            session()->flash('error_message', $exc->getMessage());
        }
    }

    public function update()
    {
        try {
            $validated = $this->validate();
            $validated['date'] = Carbon::parse($validated['date']);
            $this->post->update($validated);
            foreach ($validated['images'] as $image) {
                PostMedia::updateOrCreate([
                    'post_id' => $this->post->id,
                    'media_type' => MediaType::Image,
                    'id' => $image['id'],
                ],
                [
                    'url' => $image['url'],
                    'is_primary' => $image['url'] == $this->main_image,
                ]);
            }
            foreach ($validated['videos'] as $video) {
                PostMedia::updateOrCreate([
                    'post_id' => $this->post->id,
                    'media_type' => MediaType::Video,
                    'id' => $video['id'],
                ],
                [
                    'url' => $video['url'],
                    'thumbnail_url' => Arr::get($video, 'thumbnail_url'),
                ]);
            }
            session()->flash('message', 'Post aggiornato con successo');
        } catch(Exception $e) {
            session()->flash('error_message', $e->getMessage());
        }
    }

    private function getVideoThumbnail($url)
    {
        $youtubePattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
        $vimeoPattern = '/(?:https?:\/\/)?(?:www\.)?vimeo.com\/([0-9]+)/';

        if (preg_match($youtubePattern, $url, $matches)) {
            return "https://img.youtube.com/vi/{$matches[1]}/hqdefault.jpg";
        // } elseif (preg_match($vimeoPattern, $url, $matches)) {
        //     $videoId = $matches[1];
        //     $hash = json_decode(file_get_contents("https://vimeo.com/api/v2/video/$videoId.json"), true);
        //     return $hash[0]['thumbnail_large'];
        }
        return null;
    }

    private function sanitizeFileName($fileName)
    {
        // Rimuovi le estensioni del file
        $pathInfo = pathinfo($fileName);
        $fileNameWithoutExt = $pathInfo['filename'];
        $fileNameWithoutExt = preg_replace('/[^a-z0-9]+/', '_', strtolower($fileNameWithoutExt));

        // Rimuovi eventuali underscore iniziali e finali
        $fileNameWithoutExt = trim($fileNameWithoutExt, '_');

        // Ricostruisci il nome del file con l'estensione originale
        $sanitizedFileName = $fileNameWithoutExt . '_' . time() . '.' . $pathInfo['extension'];

        return $sanitizedFileName;
    }

    public function deleteImage($index, $id = null)
    {
        if (array_key_exists($index, $this->images)) {
            $image = $this->images[$index];
            Storage::delete($image['url']);
            unset($this->images[$index]);
        }
        if ($id) {
            PostMedia::findOrFail($id)->delete();
        }
    }

    public function removeVideo($index, $id = null)
    {
        if (array_key_exists($index, $this->videos)) {
            unset($this->videos[$index]);
        }
        if ($id) {
            PostMedia::findOrFail($id)->delete();
        }
    }

    public function transformYouTubeUrl($url) {
        $parsedUrl = parse_url($url);
        $videoId = '';

        // Gestisce i vari formati di URL di YouTube
        if ($parsedUrl['host'] === 'youtu.be') {
            // Per gli URL brevi come https://youtu.be/mokVTWnIGzw
            $videoId = trim($parsedUrl['path'], '/');
        } elseif (strpos($parsedUrl['host'], 'youtube.com') !== false) {
            // Per gli URL standard come https://www.youtube.com/watch?v=mokVTWnIGzw
            parse_str($parsedUrl['query'], $queryParams);
            $videoId = $queryParams['v'];
        }

        // Mantiene i query params
        $queryParams = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';

        // Costruisce l'URL embed senza cookie
        $nocookieUrl = "https://www.youtube-nocookie.com/embed/{$videoId}?{$queryParams}";

        return $nocookieUrl;
    }
}
