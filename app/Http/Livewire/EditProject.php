<?php

namespace App\Http\Livewire;

use App\Models\Project;

use  Illuminate\Support\Facades\Gate;
use LivewireUI\Modal\ModalComponent;

class EditProject extends ModalComponent
{ 
    public $name;
    public $about;
    public  $project;
    
    public function mount( $project){
        $this->project = Project::find($project);
        $this->name=$this->project->name;
        $this->about=$this->project->about;
    }

    public function onSubmit(){
        
        Gate::authorize('edit',$this->project);
        $this->project->update(['name'=>$this->name,'about'=>$this->about]);
        $this->emitTo('projects-list', 'refreshProjects');
        $this->closeModal();
        
    }
    public function render()
    {
        return view('livewire.edit-project');
    }
}
