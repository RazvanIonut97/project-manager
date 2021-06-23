<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsList extends Component
{
    use WithPagination;
    protected $listeners = [
        'refreshProjects' => '$refresh'
    ];
    public $search;

    public function deleteProject($id){
        Project::destroy($id);
    }
    public function render()
    {
        $user=Auth::user();
        $projects= $user->projects()->where('name','like','%'.$this->search.'%')->paginate(8);
        return view('livewire.projects-list',[
            'projects'=> $projects
         ]);
    }
}