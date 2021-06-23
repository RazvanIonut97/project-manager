<div class=" bg-gray-300 p-6 rounded-lg">
    <h3 class="flex justify-center mb-3 text-xl">New Project</h3>
    <form action="{{ route('register') }}" method="post" wire:submit.prevent="onSubmit">
        @csrf
        <div class="mb-4">
            <label for="name" class="sr-only">Add project</label>
            <input wire:model="name" type="text" name="name" id="name" placeholder="Project name" 
            class="bg-gray-800 text-white border-2 w-full p-4 rounded-lg 
            @error('name') border-red-500 @enderror" value="{{ old('name') }}" autocomplete="off">

            @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="about" class="sr-only">Project description</label>
            <textarea  wire:model="about"  name="about" id="about" 
            placeholder="Project description"
             class="bg-gray-800 text-white border-2 w-full p-4 rounded-lg 
             @error('about') border-red-500 @enderror">
            </textarea>
            @error('about')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <button type="submit" class="bg-gray-800 text-white px-4 py-3 rounded font-medium w-full">Add Project</button>
        </div>
    </form>
</div>