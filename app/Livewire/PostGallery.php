<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostGallery extends Component
{
    public Post $post;
    public $media;
    public $medias;
    public $classList;

    public function mount($post)
    {
        $this->post = $post;
        $this->media = $post->images->first(); // Set the initial main image
        $this->medias = $post->postMedia->mapWithKeys(
            static function($item) {
                return [$item->id => $item];
            }
        );
    }

    public function updateMainMedia($mediaId)
    {
        $this->media = $this->medias[$mediaId];
    }

    public function render()
    {
        return view('livewire.post-gallery');
    }
}
