<div x-data="{isOpen:false,seeBtn:true}" @click.away="{isOpen=false,seeBtn=true}" class="relative">

    <div x-show="seeBtn" >
    <button @click="{isOpen=true,seeBtn=false}" class="w-64 p-1 bg-gray-300 rounded-xl flex">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg> Add another list
    </button>
    </div>

        
    <form x-show="isOpen"  wire:submit.prevent="addList" class=" absolute p-2  w-64 relative mt-14  bg-gray-300 rounded-xl">
        <input wire:model="listName" type="text" class="rounded pl-2 w-full shadow-2xl" placeholder="Enter list name">
        <div class="pt-4">

       
        <button class="bg-green-800 text-white p-1 rounded w-24">
            Add list
        </button>

        <button type="reset" @click="{isOpen=false,seeBtn=true}" class="bg-red-800 text-white p-1 rounded w-24" >
            X
        </button>
    </div>
    </form>
     
  
</div>
