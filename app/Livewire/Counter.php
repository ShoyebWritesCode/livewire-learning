<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Counter')]

class Counter extends Component
{
    public $count = 0;

    public function increment($by)
    {
        $this->count = $this->count + $by;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function resets()
    {
        $this->count = 0;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
