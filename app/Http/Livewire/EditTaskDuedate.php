<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class EditTaskDuedate extends Component
{   public $task;
    public $date;
    
    public function change(){

        Task::find($this->task)->update(['due_date' => $this->date]);
        $this->emitTo('board', 'refreshlists');
    }
    public function setNull(){
        Task::find($this->task)->update(['due_date' => NULL]);
        $this->emitTo('board', 'refreshlists');
    }
    public function render()
    {
        return view('livewire.edit-task-duedate');
    }
}
