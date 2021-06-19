<div class="p-2">
    
    @if ($histories->count()==0)
        No history for this project
    @else
@foreach ($histories as $history)
<div class="p-2 mb-2 bg-gray-300 shadow-lg">
    <p>{{$history->action}}</p>
    <p class="text-xs"><u>{{$history->created_at}}</u></p>
</div>
@endforeach
    
    @endif
  
</div>
