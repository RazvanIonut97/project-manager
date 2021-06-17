<div>
    <p class="text-lg font-semibold">Due Date</p>
    <div class="flex">
    <input wire:change="change" type="date" wire:model="date" value="{{$date}}" class="rounded p-1 bg-gray-200">
    <button class="ml-2" wire:click="setNull"><u>Reset</u>  </button>
</div>
</div>
