<div class="min-w-screen flex justify-center">
 <div class="w-4/6">
    <div class="h-12 m-2 flex justify-center items-center">
        <input type="search" wire:model="search" placeholder="Search by name..."
        class="w-60 rounded-lg p-1 text-center shadow-lg ">
    </div>
    <div class="bg-gray-200 rounded p-2 w-6/6">
        <div class="bg-gray-800 text-white  shadow-lg rounded h-12 mb-2 flex items-center w-full">
            <p wire:click="sort('title')"class="font-semibold cursor-pointer flex items-center pl-2 w-60">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " viewBox="0 0 20 20" fill="currentColor">
                <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
              </svg>Task:</p>
              <p wire:click="sort('project_id')"class="font-semibold cursor-pointer flex items-center pl-2 w-60">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " viewBox="0 0 20 20" fill="currentColor">
                <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
              </svg>Project:</p>
            <p wire:click="sort('due_date')"class="font-semibold cursor-pointer flex items-center pl-2 w-60">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " viewBox="0 0 20 20" fill="currentColor">
                <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
              </svg>Due date:</p>
            <p wire:click="sort('priority')" class="font-semibold flex items-center  cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " viewBox="0 0 20 20" fill="currentColor">
                <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
              </svg>Priority:</p>
        
        </div>
    @foreach ($tasks as $task)
      <div class="bg-gray-100 shadow-lg rounded h-12 mb-2 flex items-center w-full">
          <p  onclick='Livewire.emit("openModal", "task-modal-colaborator",{{ json_encode(["task" => $task->id,"project"=>$task->project_id]) }})' 
            class="font-semibold  cursor-pointer pl-2 w-60">{{$task->title}}</p>
          <p  class="font-semibold pl-2 w-60">
           <u><a href="{{route('project',$task->project)}}">
            {{$task->project->name}}</a> </u></p>
          <p class="font-semibold pl-2 w-60">@if ($task->due_date!=null)
            {{$task->due_date}}
          @else
              None
          @endif</p>
          <p  class="font-semibold">{{$this->getPriority($task->priority)}}</p>
      
      </div>
      @endforeach
      {{$tasks->links()}}
    </div>
 
</div>
</div>