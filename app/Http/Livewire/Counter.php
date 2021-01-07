<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('livewire.counter');
    }

    public $count = 0;

    public function increment()
    {
        $this->Count++;
    }

    public function decrement()
    {
        $this->Count--;
    }
}
