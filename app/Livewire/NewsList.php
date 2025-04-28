<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class NewsList extends Component
{
    public function render()
    {
        return view('livewire.news-list', [
            'posts' => Post::all()->sortByDesc('date'),
        ]);
    }
}
