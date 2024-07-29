<?php

namespace App\Livewire;

use Livewire\Component;

class SimpleToDo extends Component
{
    public $todo = '';
    public $todos = [
        'Finish that coding project... or at least pretend to',
        'Google how to fix bugs that magically appear',
        'Write documentation (or at least some comments)',
        'Take a break and watch cat videos',
        'Refactor code (because it’s a mess)',
        'Pretend to understand advanced algorithms',
        'Plan for tomorrow’s procrastination',
        'Check Twitter and Facebook for the latest memes',
        'Debug code until it magically works',
        'Remember to refactor the code you promised to last week'
    ];

    public function add()
    {
        if (!empty($this->todo)) {
            $this->todos[] = $this->todo;
            $this->todo = '';
        }
    }

    public function render()
    {
        return view('livewire.simple-to-do');
    }
}
