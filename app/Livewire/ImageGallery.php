<?php

namespace App\Livewire;

use Livewire\Component;

class ImageGallery extends Component
{
    public array $images;
    public string $gridClass;

    public function render()
    {
        return view('livewire.image-gallery');
    }
}
