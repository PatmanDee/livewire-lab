<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
class CreatePost extends Component
{
    #[Title('Create Post')]


    #[Rule('required')]
    public $title = '';

    #[Rule('required')]
    public $content = '';

    public function createPost()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        $this->redirect(route('posts'), navigate: true);

    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
