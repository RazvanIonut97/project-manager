@props(['priority'=>$priority])
<div>
    {{$priority}}
    <p class="text-lg font-semibold">Priority</p>
    <select name="priority" wire:model="priority">
        <option value="1" @if ($priority===1) selected
        @endif >Top</option>
        <option value="2"@if ($priority==2) selected
            @endif>Moderate</option>
        <option value="3" @if ($priority==3) selected
            @endif>Normal</option>
        <option value="4" @if ($priority==4) selected
            @endif>Low</option>
      </select>
</div>