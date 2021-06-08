<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsList extends Component
{
    use WithPagination;
    protected $listeners = [
        'refreshProjects' => '$refresh'
    ];
    public $search;
    public function render()
    {
       $id=auth()->user()->id;
        $projects=Project::where([
            ['user_id','=',$id],
            ['name','like','%'.$this->search.'%'],
            ])->paginate(8);;
        //dd($projects);
        //auth()->user()->projects->paginate(8);
        return view('livewire.projects-list',[
            'projects'=> $projects
         ]);
    }
}
