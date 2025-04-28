<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPost extends Component
{
    use WithFileUploads;

    public PostForm $form;
    public Post $post;

    public function mount()
    {
        $this->form->setPost($this->post);
    }
    public function save()
    {
        $this->form->update();
    }

    public function uploadVideo()
    {
        $this->form->uploadVideo();
    }

    public function uploadImages()
    {
        $this->form->uploadImages();
    }

    public function deleteImage($index, $id = null)
    {
        $this->form->deleteImage($index, $id);
    }

    public function removeVideo($index, $id = null)
    {
        $this->form->removeVideo($index, $id);
    }

    public function render()
    {
        return view('livewire.edit-post', [
            'title' => __('Modifica post'),
        ]);
    }
}
