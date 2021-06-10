<div>
    <div wire:sortable="updateGroupOrder" wire:sortable-group="updateTaskOrder" class="flex px-4 pb-8 items-start overflow-x-scroll">
        @foreach ($groups as $group)
            <div wire:key="group-{{ $group->id }}" wire:sortable.item="{{ $group->id }}" class="rounded bg-red-100  flex-no-shrink w-64 p-2 mr-3">
                <div class="flex justify-between py-1">
                    <h4 wire:sortable.handle>{{ $group->title }}</h4>
    
                    <button wire:click="removeGroup({{$group->id}})">Remove</button>
                </div>
                <ul wire:sortable-group.item-group="{{$group->id}}" class="overflow-hidden rounded ">
                    <li  class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                        
                        <button>Remove</button>
                    </li>
                    @foreach ($group->tasks->sortBy('position') as $task)
                    
                        <li wire:key="task-{{ $task->id }}" wire:sortable-group.item="{{ $task->id }}" class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                            {{ $task->title }}
                            <button wire:click="removeTask({{ $task->id  }})">Remove</button>
                        </li>
                    @endforeach
                </ul>
                
    
                <form wire:submit.prevent="addTask({{ $group->id }}, $event.target.title.value)">
                    <input type="text" name="title">
    
                    <button>Add Task</button>
                </form>
            </div>
        @endforeach
    
       
    </div>
    <form wire:submit.prevent="addGroup">
            <input type="text" wire:model="newGroupLabel">
    
            <button>Add Task Group</button>
        </form>
    </div>
    