<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';
    public $todos = [];

    public function mount()
    {
        $this->todos = ['Buy groceries', 'Finish Laravel course', 'Learn Vue.js'];
        // $this->todos = Todo::all(); if we are getting data from a database

    }

    public function add()
    {
       $this->todos[] = $this->todo;
       $this->reset('todo');
    }


    public function render()
    {
        return view('livewire.todos');
    }
}
