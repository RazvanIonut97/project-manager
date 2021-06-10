<?php

namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\Task;
use Livewire\Component;

class Board extends Component
{
    public $project;

    public function updateGroupOrder(){
       

        
    }
    public function updateTaskOrder($list){
     //dd($list);
     foreach ($list as $item){
        foreach($item['items'] as $ceva){
           Task::find($ceva['value'])->update(['position'=>$ceva['order'],'group_id'=>$item['value']]);
}   
    }
      
    }
    public function render()
    { 
       //dd($this->project->groups);
       $groups=Group::where('project_id','=',$this->project->id)->orderBy('order')->get();
       //dd($groups);
        return view('livewire.board',[
            'groups'=>$groups
        ]);
    }
}
