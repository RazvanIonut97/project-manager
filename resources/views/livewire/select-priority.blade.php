<div>
    <p class="text-lg font-semibold">Priority</p>
    <select  wire:model="priority" wire:change="change" value="{{$priority}}" class="bg-gray-200 rounded p-1">
        <option value="1">Top</option>
        <option value="2">Moderate</option>
        <option value="3" >Normal</option>
        <option value="4" >Low</option>
      </select>
</div>
