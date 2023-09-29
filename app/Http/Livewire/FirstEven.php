<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FirstEven extends Component
{
    public function startEvent()
    {
        $this->emit('fire');
    }

    public function render()
    {
        return view('livewire.first-even');
    }
}
