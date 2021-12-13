<?php

namespace App\Http\Livewire\Petition;

use App\Models\Petition\Petition;
use Livewire\Component;

class Petitions extends Component
{
    public $petitions;

    public function mount()
    {
        $this->petitions = Petition::latest()->get();
    }

    public function render()
    {
        return view('livewire.petition.petitions');
    }
}
