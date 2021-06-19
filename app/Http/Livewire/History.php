<?php

namespace App\Http\Livewire;

use App\Models\History as ModelsHistory;
use LivewireUI\Modal\ModalComponent;

class History extends ModalComponent
{
    public  $project;
    public $histories;
  
    public function mount($project)
    {    
        $this->project = $project;
        $this->histories=ModelsHistory::where('project_id','=',$project)->get();
    }

    public function render()
    {
        return view('livewire.history');
    }
}
