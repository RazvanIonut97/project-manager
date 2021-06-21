<div class="p-5 text-gray-800">
    <div class="flex justify-between ">
        <div>
            <div>
                <p class="text-lg w-96 font-semibold " > 
                    {{$item->title}}
                </p>
            </div> 
            <p class="text-xs text-gray-500">in list <u>{{$item->group->title}}</u></p>
        </div>
        <button wire:click="close"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
    </div>
    <div>
        <p class="text-lg font-semibold">Description</p>
        <p  class=" w-full bg-gray-200 rounded-lg p-2">
           @if($item->description!=null)
            {{$item->description}}
            @else
            No description
            @endif
        </p>
    </div>
    <div class="flex justify-between">
            <div>
                <p class="text-lg font-semibold">Due Date</p>
                <div class="flex">
                    @if($item->due_date!=null)
                    <p  class="rounded p-1 bg-gray-200">{{$item->due_date}}</p>
                    @else
                   <p>No due date</p>
                    @endif
                    
                </div>
            </div>
            
            <div>
                <p class="text-lg font-semibold">Priority</p>
                <p>
                @switch($item->priority)
                    @case(1)
                        Top
                        @break
                    @case(2)
                        Moderate
                        @break
                    @case(3)
                        Normal
                        @break 
                    @case(4)
                        Low 
                        @break
                    @default
                        Default
                @endswitch
            </p>
            </div>
            
    </div>
  
    <div >
        <p class="text-lg font-semibold">Assigned to:</p>
        <p>{{$user}}</p>
    </div>
    
</div>
