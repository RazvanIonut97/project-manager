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
    public $date;

    protected $listeners = [
        'refreshlists' => '$refresh'
    ];
public function removeTask($id){
    Task::destroy($id);
}

public function removeGroup($id){
    Group::destroy($id);
}

    public function addTask($grupId,$value){
        $lastTask=Task::where('group_id','=',$grupId)->max('position');

       Task::create( [
        'title' => $value,
        'position' => $lastTask+1,
        'group_id'=>$grupId,
        'project_id'=>$this->project->id,
        
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

