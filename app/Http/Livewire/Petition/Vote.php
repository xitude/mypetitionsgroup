<?php

namespace App\Http\Livewire\Petition;

use Livewire\Component;

class Vote extends Component
{
    public $petition;
    public $votes;

    public function mount($petition)
    {
        $this->petition = $petition;
        $this->votes = $petition->votes->count();
    }

    public function vote()
    {
        $this->petition->votes()->attach(auth()->user()->id);
        $this->votes = $this->votes + 1;

        redirect()->route('petitions.show', $this->petition->slug);
    }

    public function render()
    {
        return view('livewire.petition.vote');
    }
}
