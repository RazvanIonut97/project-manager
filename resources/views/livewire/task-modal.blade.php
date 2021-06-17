<div class="p-5 text-gray-800">
    <div class="flex justify-between ">
        <div>
            <input type="text" class="text-lg font-semibold" value="{{$item->title}}">
            <p class="text-xs text-gray-500">in list <u>{{$item->group->title}}</u></p>
        </div>
        <button><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
    </div>
    <div>
        <p class="text-lg font-semibold">Description</p>
        <textarea name="description" cols="30" rows="4"  class=" w-full bg-gray-200 rounded-lg "></textarea>
    </div>
    <div class="flex justify-between">
        <div>
            <p class="text-lg font-semibold">Due Date</p>
            <div class="flex">
            <input type="date" >
            <p>23 days left</p>
            </div>
        </div>
        <livewire:select-priority :priority="$item->priority" :task="$item->id" />
       
    </div>
    <div class="">
        <p class="text-lg font-semibold">Asigned to:</p>
        <select name="priority">
            @foreach ($users as $user)
             <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
            
            
          </select>
    </div>
    
</div>
