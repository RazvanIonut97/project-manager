<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search='';
    public $project;
    protected $listeners = [
        'refreshDropdown' => '$refresh'
    ];
    public function assignUser($id){

        $this->project->users()->attach($id);
        $this->emitTo('search-dropdown', 'refreshDropdown');
    }
    public function unassignUser($id){

        Task::where('project_id',$this->project->id)
       ->where('user_id',$id)->update(['user_id'=>null]);
        $this->project->users()->detach($id);
        $this->emitTo('search-dropdown', 'refreshDropdown');
        $this->emitTo('board', 'refreshlists');
    }

    public function render()
    {
        $results=[];
        if(strlen($this->search)>2){
            $results=User::where('email','like','%'.$this->search.'%')->get();
        }
        
        return view('livewire.search-dropdown',[
            'results'=> $results
         ]);
    }
}
