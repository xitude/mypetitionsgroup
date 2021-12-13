<?php

namespace App\Http\Livewire\Petition;

use Livewire\Component;

class Comments extends Component
{
    public $petition;
    public $comments;

    public function mount($petition)
    {
        $this->petition = $petition;
        $this->comments = $this->petition->comments;
    }

    public function render()
    {
        return view('livewire.petition.comments');
    }
}
