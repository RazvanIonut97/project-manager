<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\Task;
use LivewireUI\Modal\ModalComponent;

class TaskModal extends ModalComponent
{
    public  $task;
    public  $project;
  
    public function mount( $task,$project)
    {    
        $this->task = $task;
        $this->project = $project;
    }
    public function close(){
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.task-modal',[
            'item'=>Task::find($this->task),
            'users'=>Project::find($this->project)->users
        ]);
    }
}