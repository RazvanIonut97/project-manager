<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class EditTaskName extends Component
{
    public $task;
    public $text;
    
    public function change(){

        Task::find($this->task)->update(['title' => $this->text]);
        //$this->emitTo('task-modal', 'refreshTaskModal');
        $this->emitTo('board', 'refreshlists');
    }
    public function render()
    {
        return view('livewire.edit-task-name');
    }
}
