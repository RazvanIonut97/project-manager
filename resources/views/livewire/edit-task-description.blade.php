<div>
    <p class="text-lg font-semibold">Description</p>
    <textarea wire:change.debounce.500ms="change" wire:model.lazy="text"
     cols="30" rows="4"  class=" w-full bg-gray-200 rounded-lg ">{{$text}}</textarea>
</div>