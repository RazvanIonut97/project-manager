<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class AddProject extends ModalComponent
{
    public function render()
    {
        return view('livewire.add-project');
    }
}
