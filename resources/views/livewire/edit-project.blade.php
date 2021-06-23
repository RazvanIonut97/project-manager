<div class=" bg-gray-300 p-6 rounded-lg">
    <h3 class="flex justify-center mb-3 text-xl">Edit project</h3>
    <form  wire:submit.prevent="onSubmit">
        <div class="mb-4">
            <label for="name" class="sr-only">Add project</label>
            <input  wire:model="name" type="text"  placeholder="Project name" 
            class="bg-gray-800 text-white border-2 w-full p-4 rounded-lg "
             autocomplete="off">

        </div>

        <div class="mb-4">
            <label for="about" class="sr-only">Project description</label>
            <textarea  wire:model="about"  name="about" id="about" 
            placeholder="Project description"
             class="bg-gray-800 text-white border-2 h-60 w-full p-4 rounded-lg ">
             </textarea>
         
        </div>
        <div>
            <button type="submit" wire:click="onSubmit" class="bg-gray-800 text-white px-4 py-3 rounded font-medium w-full">Update</button>
        </div>
    </form>
</div>