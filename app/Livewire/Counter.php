<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment($by) {
        $this->count += $by;
    }

    private function decrement($by) {
        $this->count -= $by;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
