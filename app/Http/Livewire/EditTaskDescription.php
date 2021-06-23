<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class EditTaskDescription extends Component
{
    public $task;
    public $text;
    
    public function change(){

        Task::find($this->task)->update(['description' => $this->text]);
        $this->emitTo('board', 'refreshlists');
    }
    public function render()
    {
        return view('livewire.edit-task-description');
    }
}
