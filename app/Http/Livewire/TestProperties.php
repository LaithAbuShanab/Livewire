<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestProperties extends Component
{

    // public $names = ["Laith Ashraf", "Asma AbuGhaith", "Ali Shanab"];

    public $name;

    // public function getFullNameProperty()
    // {
    //     return implode(' ', $this->names);
    // }

    public function render()
    {
        return view('livewire.test-properties');
    }
}
