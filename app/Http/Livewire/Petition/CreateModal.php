<?php

namespace App\Http\Livewire\Petition;

use App\Models\Petition\Petition;
use Carbon\Carbon;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateModal extends ModalComponent
{
    public $title;
    public $description;

    public function create()
    {
        $petition = Petition::create([
            'title' => $this->title,
            'description' => nl2br(htmlspecialchars($this->description)),
            'creator_id' => auth()->user()->id,
            'ends_at' => Carbon::now()->addMonths(3),
        ]);

        redirect()->route('petitions.show', $petition->slug);
    }

    public function render()
    {
        return view('livewire.petition.create-modal');
    }
}
