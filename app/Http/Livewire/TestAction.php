<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestAction extends Component
{
    public $count = 0;
    public $active = true;

    public function increment()
    {
        if ($this->count >= 0) {
            $this->count++;
        }
    }

    public function decrement()
    {
        if ($this->count > 0) {
            $this->count--;
        }
    }

    public function render()
    {
        return view('livewire.test-action');
    }
}
