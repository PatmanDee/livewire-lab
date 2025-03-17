<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Title;

#[Title('Posts')]
class ShowPosts extends Component
{

    public function editPost(Post $post)
    {
        $post->title = 'Updated Title';
        $post->content = 'Updated Content';
        $post->save();
    }

    public function deletePost(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::all(),
        ]);
    }
}
