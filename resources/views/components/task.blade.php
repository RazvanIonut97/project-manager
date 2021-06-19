@props(['task'=>$task,'project'=>$project])
<li wire:key="task-{{ $task->id }}" wire:sortable-group.item="{{ $task->id }}"
    class="flex  mb-1 cursor-pointer shadow-lg">

    <x-priority :priority="$task->priority" />

    <div class="bg-white  hover:bg-gray-100 p-2 w-full flex justify-between items-center  rounded-r">
        <div 
       @if (auth()->user()->id==$acces->user_id)
       onclick='Livewire.emit("openModal", "task-modal",{{ json_encode(["task" => $task->id,"project"=>$project]) }})'
       @else
       onclick='Livewire.emit("openModal", "task-modal-colaborator",{{ json_encode(["task" => $task->id,"project"=>$project]) }})'   
       @endif 
            class=" w-full">
            <p class="break-all text-gray-800">{{ $task->title }}</p>
            <div class="text-gray-500 text-sm">

                @if ($task->due_date)
                <p>Due date:{{ $task->due_date }}</p>
                @endif

                @if ($task->user_id)
                <p>Asigned to:<u >{{ $task->user->name }}</u></p>
                @endif
                
            </div>
        </div>

        @can('edit', $acces)
        <button wire:click="removeTask({{$task->id}})" class="ml-1">
            <svg wire:click="removeTask({{ $task->id  }})" class="h-5 w-5 text-gray-800 hover:text-red-800"
                viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        @endcan

    </div>

</li>
