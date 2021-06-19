<div class="flex">
    <p class="mr-2">Invite</p>
    <div x-data="{isOpen:true}" @click.away="isOpen=false">
        
        <input wire:model="search" @focus="isOpen=true" type="text" class="w-48 rounded pl-2  mr-2"
            placeholder="Search by email">
           
        @if(strlen($search)>2)
        <div x-show="isOpen" class="absolute bg-gray-50 rounded w-48 mt-3 shadow-lg">

            <ul>
                @if($results->count())

                @foreach ($results as $result)
                @if($project->users->contains('id',$result->id))
                <li wire:click="unassignUser({{$result->id}})" 
                class="border-b border-gray-200 hover:bg-red-100 flex justify-between items-center">
                    <p class="px-3 py-2 "> {{$result->name}} {{$result->surname}}</p>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </li>
                @else
                <li wire:click="assignUser({{$result->id}})"
                    class="border-b border-gray-200 hover:bg-red-100 flex justify-between items-center">
                    <p class="px-3 py-2 "> {{$result->name}} {{$result->surname}}</p>
                </li>
                @endif
                @endforeach

                @else
                <li class="border-b border-gray-200">
                    <p class=" px-3 py-2 hover:bg-red-100">No user found</p>
                </li>
                @endif

            </ul>
        </div>
        @endif
        
    </div>
</div>
