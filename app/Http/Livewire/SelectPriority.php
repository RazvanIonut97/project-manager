<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class SelectPriority extends Component
{ 
    public $priority;
    public $task;

   
    public function change(){
      Task::find($this->task)->update(['priority' => $this->priority]);
      $this->emitTo('board', 'refreshlists');
    }
    public function render()
    {
        return view('livewire.select-priority');
    }
}
