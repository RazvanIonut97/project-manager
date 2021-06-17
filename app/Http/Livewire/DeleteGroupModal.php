<?php

namespace App\Http\Livewire;

use App\Models\Group;
use LivewireUI\Modal\ModalComponent;

class DeleteGroupModal  extends ModalComponent
{
    public $group;
    public function close(){
        $this->closeModal();
    }
    public function removeGroup(){
        Group::destroy($this->group);
        $this->emitTo('board', 'refreshlists');
        $this->closeModal();
    }  
    public function render()
    {
        return view('livewire.delete-group-modal');
    }
}
