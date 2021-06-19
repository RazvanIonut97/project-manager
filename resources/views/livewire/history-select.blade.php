<div>
    <div class="flex">
    
    <p class="mr-2">History</p>
    <select wire:model="history" value={{$history}} wire:change="change">
        <option value="1">On</option>
        <option value="0">Off</option>
    </select>
    
</div>
<button  onclick='Livewire.emit("openModal", "history",{{ json_encode(["project" => $project]) }})' 
    class="text-xs"><u>Open</u></button>
</div>
