<div >
    <p class="text-lg font-semibold">Asign to:</p>
    <select wire:change="change"  wire:model="userId" value="{{$userId}}" class="w-80 text-lg font-semibold capitalize rounded bg-gray-200 ">
        @foreach ($users as $user)
         <option  class="h-12 rounded-lg" value="{{$user->id}}">{{$user->name}} {{$user->surname}}</option>
        @endforeach
      </select>
      <button  class="ml-2"wire:click="setNull"><u>Reset</u> </button>
</div>
