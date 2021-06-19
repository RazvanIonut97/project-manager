<div class="min-w-screen flex justify-center">
 <div class="w-4/6">
    <div class="h-12 m-2 flex justify-center items-center">
        <input type="search" wire:model="search" placeholder="Search by name..."
        class="w-60 rounded-lg p-1 text-center shadow-lg ">
    </div>
    <div class="bg-gray-200 rounded p-2 w-6/6">
        <div class="bg-gray-800 text-white  shadow-lg rounded h-12 mb-2 flex items-center w-full">
            <p class="font-semibold pl-2 w-60">Task</p>
            <p  class="font-semibold pl-2 w-60">Projet</p>
            <p class="font-semibold pl-2 w-60">Due date</p>
            <p  class="font-semibold">Priority</p>
        
        </div>
    @foreach ($tasks as $task)
      <div class="bg-gray-100 shadow-lg rounded h-12 mb-2 flex items-center w-full">
          
        
  
          <p class="font-semibold pl-2 w-60">{{$task->title}}</p>
          <p  class="font-semibold pl-2 w-60">
           <u><a href="{{route('project',$task->project)}}">
            {{$task->project->name}}</a> </u></p>
          <p class="font-semibold pl-2 w-60">@if ($task->due_date!=null)
            {{$task->due_date}}
          @else
              None
          @endif</p>
          <p  class=""> <u>{{$task->priority}}</u></p>
      
      </div>
      @endforeach
      {{$tasks->links()}}
    </div>
 
</div>
</div>