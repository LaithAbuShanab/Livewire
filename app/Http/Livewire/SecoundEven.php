<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecoundEven extends Component
{
    protected $listeners = [
        'fire' => 'ambulance'
    ];

    public function ambulance()
    {
        dd("from First");
    }

    public function render()
    {
        return view('livewire.secound-even');
    }
}
