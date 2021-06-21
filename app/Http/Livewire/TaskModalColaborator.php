<?php

namespace App\Http\Livewire;
use LivewireUI\Modal\ModalComponent as Component;
use App\Models\Task;
use App\Models\User;

class TaskModalColaborator extends Component
{
    public  $task;
    public  $project;
  
    public function mount( $task,$project)
    {    
        $this->task = $task;
        $this->project = $project;
    }
 
    public function render()
    {
        $item=Task::find($this->task);
        $user=$this->findUser($item->user_id);
        
        
        return view('livewire.task-modal-colaborator',[
            'item'=>$item,
            'user'=>$user,
        ]);
    }
    public function close(){
        $this->closeModal();
    }
    public function findUser($id){
        if($id==null){
            return "Unassigned";
        }
        else{
            $user=User::find($id);
            return "$user->name $user->surname";
        }

    }
}
