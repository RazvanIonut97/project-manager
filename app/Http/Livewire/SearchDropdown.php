<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search='';
    public $project;
    protected $listeners = [
        'refreshDropdown' => '$refresh'
    ];
    public function asignUser($id){

        $this->project->users()->attach($id);
        $this->emitTo('search-dropdown', 'refreshDropdown');
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
