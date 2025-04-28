<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public PostForm $form;

    public function save()
    {
        $this->form->store();
    }

    public function uploadVideo()
    {
        $this->form->uploadVideo();
    }

    public function uploadImages()
    {
        $this->form->uploadImages();
    }

    public function deleteImage($index)
    {
        $this->form->deleteImage($index);
    }

    public function removeVideo($index)
    {
        $this->form->removeVideo($index);
    }

    public function render()
    {
        return view('livewire.create-post', [
            'title' => __('Aggiungi un nuovo post'),
        ]);
    }
}
