<?php

namespace App\Http\Livewire\Petition;

use App\Models\Comment\Comment;
use App\Models\Petition\Petition;
use Livewire\Component;

class CommentCreate extends Component
{
    public $petition;
    public $comment;

    public function mount($petition)
    {
        $this->petition = $petition;
    }

    public function comment()
    {
        Comment::create([
            'assignable_type' => Petition::class,
            'assignable_id' => $this->petition->id,
            'comment' => nl2br(htmlspecialchars($this->comment)),
            'user_id' => auth()->user()->id,
        ]);

        redirect()->route('petitions.show', $this->petition->slug);
    }

    public function render()
    {
        return view('livewire.petition.comment-create');
    }
}
