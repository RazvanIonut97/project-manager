<?php
namespace App\Http\Livewire;

use App\Models\Group;
use Livewire\Component;

class AddList extends Component
{

    public $listName;
    public $project;

    public function addList()
    {
        $lastGroup = Group::where('project_id', '=', $this
            ->project)
            ->max('order');
            
        Group::create(['title' => $this->listName, 'order' => $lastGroup + 1,'project_id'=>$this->project]);
        $this->emitTo('board', 'refreshlists');
        $this->reset('listName');
    }
   // wire:click="removeGroup({{$group->id}})"
    public function render()
    {
        return view('livewire.add-list');
    }
}

