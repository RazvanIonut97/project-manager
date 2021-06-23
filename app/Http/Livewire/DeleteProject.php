<?php

namespace App\Http\Livewire;

use App\Models\Project;
use LivewireUI\Modal\ModalComponent;
use  Illuminate\Support\Facades\Gate;
class DeleteProject extends ModalComponent
{
    public  $project;
    
    public function mount( $project){
        $this->project = Project::find($project);
    }
    public function removeProject(){
        Gate::authorize('edit',$this->project);
        $this->project->delete();
        $this->emitTo('projects-list', 'refreshProjects');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.delete-project');
    }
}
