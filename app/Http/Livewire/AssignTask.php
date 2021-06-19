<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AssignTask extends Component
{
    public $users;
    public $userId;
    public $task;
    public function setNull(){
        Task::find($this->task)->update(['user_id' => NULL]);
        $this->emitTo('board', 'refreshlists');
    }
    public function change()
    {
        if($this->userId==''){
           $this->setNull();
    }else
    {
        Task::find($this->task)->update(['user_id' => $this->userId]);
        $this->emitTo('board', 'refreshlists');
    }   
    }
    public function render()
    {
        return view('livewire.assign-task');
    }
}
