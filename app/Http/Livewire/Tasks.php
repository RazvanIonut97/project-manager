<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class Tasks extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
       // $id=auth()->user()->id;
        $tasks=auth()->user()->tasks()->where('title','like','%'.$this->search.'%')->paginate(7);
        
        return view('livewire.tasks',[
            'tasks'=>$tasks
        ]);
    }
}
