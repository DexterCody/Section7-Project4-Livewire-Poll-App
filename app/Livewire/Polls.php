<?php

namespace App\Livewire;

use App\Models\Poll;
use Livewire\Component;

class Polls extends Component
{
    protected $listeners = [
        'pollCreated' => 'render'
    ];

    public function render()
    {
        $polls = Poll::with('options.votes')
            ->latest()->get();

        return view('livewire.polls', ['polls' => $polls]);
    }
}
