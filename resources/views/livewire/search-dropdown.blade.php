<div class="flex">
    <p>Add colaborator</p>
<div x-data="{isOpen:true}" @click.away="isOpen=false" >
  
        <input wire:model="search" @focus="isOpen=true"
        type="text" 
        class="w-48 rounded pl-2  mr-2" placeholder="Search by email">

        @if(strlen($search)>3)
    <div x-show="isOpen" class="absolute bg-gray-50 rounded w-48 mt-3 shadow-lg" >
    
       <ul>
           @if($results->count())
           
           @foreach ($results as $result)
            <li class="border-b border-gray-200">
                <p class="px-3 py-2 hover:bg-red-100">{{$result->surname}}</p>
            </li> 
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