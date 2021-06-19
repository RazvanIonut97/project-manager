<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Priority extends Component
{
    public $priority;
    public function render()
    {
        return view('livewire.priority');
    }
}
