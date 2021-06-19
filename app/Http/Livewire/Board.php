<?php
namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\History;
use App\Models\Task;
use Livewire\Component;

class Board extends Component
{
   
    public $project;
    public $newGroupName;
    public $newTaskName;
    public $date;
    public $selectedTask;


    protected $listeners = [
        'refreshlists' => '$refresh'
    ];
    public function removeTask($id){
    Task::destroy($id);
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
        if($this->project->history_status==1)
        {
        $this->createHistory("Lists");
        }
    }
public function createHistory($value){
    $id=auth()->user()->id;
    $id==$this->project->user_id ? $name="You " : $name=auth()->user()->name." has";

    History::create([
        'user_id' =>$id,
        'project_id' => $this->project->id,
        'action' => "$name made a change in $value",
    ]);
}
    public function updateTaskOrder($list)
    {
        
        if($this->project->history_status==1)
        {
        $this->createHistory("Tasks");
        }
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

