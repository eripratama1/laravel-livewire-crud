<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $name,$content,$image;

    protected $rules = [
        'name' => 'required|min:6',
        'content' => 'required',
    ];

    public function updated($name,$content)
    {
        $this->validateOnly($name,$content);
    }

    public function render()
    {
        return view('livewire.post');
    }

    public function savePost()
    {
        $validatedData = $this->validate();
        Post::create($validatedData);

    }
}
