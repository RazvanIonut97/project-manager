<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search='';

    public function render()
    {
        $results=[];
        if(strlen($this->search)>3){
            $results=User::where('email','like','%'.$this->search.'%')->get();
        }
       
        
        return view('livewire.search-dropdown',[
            'results'=> $results
         ]);
    }
}
