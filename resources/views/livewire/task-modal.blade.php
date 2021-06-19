<div class="p-5 text-gray-800">
    <div class="flex justify-between ">
        <div>
           <livewire:edit-task-name :text="$item->title" :task="$item->id"/>
            <p class="text-xs text-gray-500">in list <u>{{$item->group->title}}</u></p>
        </div>
        <button><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
    </div>
    <livewire:edit-task-description :text="$item->description" :task="$item->id"/>
    <div class="flex justify-between">
        <livewire:edit-task-duedate :date="$item->due_date" :task="$item->id" />
        <livewire:select-priority :priority="$item->priority" :task="$item->id" />
       
    </div>
    <livewire:assign-task :userId="$item->user_id" :users="$users" :task="$item->id" />
 
    
</div>
