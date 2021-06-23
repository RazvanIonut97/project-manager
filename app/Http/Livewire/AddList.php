<?php
namespace App\Http\Livewire;
use App\Models\Group;
use App\Models\Project;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use  Illuminate\Support\Facades\Gate;

class AddList extends Component
{

    public $listName;
    public $project;

    public function addList()
    {
        $project=Project::find($this->project);
        Gate::authorize('edit',$project);
      
        $lastGroup = Group::where('project_id', '=', $this
            ->project)
            ->max('order');
            
        Group::create(['title' => $this->listName, 'order' => $lastGroup + 1,'project_id'=>$this->project]);
        $this->emitTo('board', 'refreshlists');
        $this->reset('listName');
    }
    public function render()
    {
        return view('livewire.add-list');
    }
}

