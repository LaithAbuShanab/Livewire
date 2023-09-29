<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InlineComp extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                Hello From Inline Component
            </div>
        blade;
    }
}
