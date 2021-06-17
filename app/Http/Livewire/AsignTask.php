<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AsignTask extends Component
{
    public $users;
    public $userId;
    public $task;
    public function setNull(){
        Task::find($this->task)->update(['user_id' => NULL]);
        $this->emitTo('board', 'refreshlists');
    }
    public function change(){
        Task::find($this->task)->update(['user_id' => $this->userId]);
        $this->emitTo('board', 'refreshlists');
    }
    public function render()
    {
        return view('livewire.asign-task');
    }
}
