<div x-data="{isOpen:false,seeBtn:true}" @click.away="{isOpen=false,seeBtn=true}" class="relative">

    <div x-show="seeBtn">
        <button @click="{isOpen=true,seeBtn=false}"
            class="w-64 p-1 bg-gray-300 rounded-xl flex font-semibold justify-center">
            Add another list
        </button>
    </div>


    <form x-show="isOpen" wire:submit.prevent="addList"
        class=" absolute p-2  w-64 relative mt-14  bg-gray-300 rounded-xl">
        <input wire:model="listName" type="text" class="rounded pl-2 w-full shadow-2xl" placeholder="Enter list name"
            required>
        <div class="pt-4">
            <button class="bg-green-800 text-white p-1 rounded w-24">
                Add list
            </button>
            <button type="reset" @click="{isOpen=false,seeBtn=true}" class="bg-red-800 text-white p-1 rounded w-24">
                X
            </button>
        </div>
    </form>


</div>
