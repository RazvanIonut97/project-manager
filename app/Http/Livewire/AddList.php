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
        $this->emitTo('board', 'refreshLists');
       // $this->emitTo('projects-list', 'refreshProjects');
        $this->reset('listName');
    }

    public function render()
    {
        return view('livewire.add-list');
    }
}

