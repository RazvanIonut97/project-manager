<div class="text-center p-5 bg-gray-800 text-white">
    <P class="mb-3 ">Are you sure you want to delete "{{$project->name}}" project?</P>
    <div class="flex justify-center">
    <button wire:click="removeProject" 
        class="bg-red-800 p-1 mr-6 w-16 rounded-lg">
        Delete
    </button>
    <button wire:click="$emit('closeModal')"
    class="bg-green-800 p-1 mr-6 w-16 rounded-lg">Close</button>
    </div>
</div>
