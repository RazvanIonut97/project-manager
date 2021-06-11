<?php
namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\Task;
use Livewire\Component;

class Board extends Component
{
    public $project;
    public $newGroupName;
    public $newTaskName;

public function removeTask($id){
    Task::destroy($id);
}

    public function addGroup(){
        $lastGroup=Group::where('project_id','=',$this->project->id)->max('order');
       $this->project->groups()->create( [
        'title' => $this->newGroupName,
        'order' => $lastGroup+1
       ]);
       $this-> reset('newGroupName');
    }

    public function addTask($grupId,$value){
        $lastTask=Task::where('group_id','=',$grupId)->max('position');

       Task::create( [
        'title' => $value,
        'position' => $lastTask+1,
        'group_id'=>$grupId
       ]);
       $this-> reset('newTaskName');
    }
    public function updateGroupOrder($list)
    {

        foreach ($list as $item)
        {
            Group::find($item['value'])-> update(['order' => $item['order']]);
        }
    }

    public function updateTaskOrder($list)
    {
        foreach ($list as $item)
        {
            foreach ($item['items'] as $task)
            {
                Task::find($task['value'])->update(['position' => $task['order'], 'group_id' => $item['value']]);
            }
        }
    }
    public function render()
    {
        $groups = Group::where('project_id', '=', $this -> project -> id) -> orderBy('order') -> get();
        return view('livewire.board', ['groups' => $groups]);
    }
}

