<div class="p-4">
  
    <div class="h-12 w-full flex justify-between px-3 items-center mb-3 bg-gray-200 rounded">
    
        <h3 >{{$project->name}}</h3>
        <form wire:submit.prevent="addGroup" class="flex">
            <input type="text" wire:model="newGroupLabel">
    
            <button>Add Task Group</button>
        </form>
    </div>
    
    <div class="bg-gray-200 min-h-full">
        <div wire:sortable="updateGroupOrder" wire:sortable-group="updateTaskOrder" class="flex px-4 py-6 items-start ">
            @foreach ($groups as $group)
                <div wire:key="group-{{ $group->id }}" wire:sortable.item="{{ $group->id }}" class="rounded-lg bg-gray-300  border-gray-800 flex-no-shrink w-64 mr-3 ">
                    <div class="flex justify-between p-2  rounded-t-lg bg-gray-800 text-white">
                        <h4 wire:sortable.handle class="cursor-pointer" >{{ $group->title }}</h4>
        
                        <button wire:click="removeGroup({{$group->id}})" class="text-red-700 hover:text-red-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                        </button>
                    </div>
    
                    <div class="scrollbar-thin  h-auto  max-h-96">
                    <ul wire:sortable-group.item-group="{{$group->id}}" class="overflow-hidden rounded h-auto p-2">
                        <li  class="mt-1"></li>
                  
                     @if ($group->tasks->count())
                         
                   
                     
                        @foreach ($group->tasks->sortBy('position') as $task)
                        
                            <li wire:key="task-{{ $task->id }}" wire:sortable-group.item="{{ $task->id }}" 
                                class="bg-white p-2 rounded mt-1 cursor-pointer shadow-lg flex justify-between items-center" >
                                <h3 onclick="Livewire.emit('openModal', 'add-project')" class="overflow-hidden" >{{ $task->title }}</h3>
    
                                <button class="ml-1">
                                <svg wire:click="removeTask({{ $task->id  }})"  class="h-5 w-5 hover:text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            </li>
                        @endforeach
                        @else
                         <p>No tasks here</p>
                        @endif

                        <li  class="mb-1"></li>
                    </ul>
                </div>
                <form wire:submit.prevent="addTask({{ $group->id }}, $event.target.title.value)" class="flex justify-between items-center p-3 mb-1  rounded-b-lg bg-gray-300 text-white">
                    <input type="text" name="title" class="rounded pl-2 text-black shadow-lg " placeholder="Add task">
    
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-700" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                          </svg>
                    </button>
                </form>
        
                
                </div>
            @endforeach
        
           
        </div>
        
    </div>
    </div>
    