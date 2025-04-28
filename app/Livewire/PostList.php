<?php

namespace App\Livewire;

use App\Models\Post;
use Error;
use Exception;
use Illuminate\Support\Collection;
use Livewire\Component;

class PostList extends Component
{
    public Collection $posts;

    public function init()
    {
        $this->posts = Post::all();
    }

    public function mount()
    {
        $this->init();
    }

    public function deletePost(Post $post)
    {
        $post->delete();
        $this->init();
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
