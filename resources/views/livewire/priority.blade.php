@switch($priority)
@case(1)
<div class="w-3 bg-red-500 rounded-l h-12"></div>  
    @break
@case(2)
<div class="w-3 bg-yellow-500 rounded-l h-12"></div>  
    @break
    @case(3)
<div class="w-3 bg-green-500 rounded-l  h-12"></div>  
    @break
@case(4)
<div class="w-3 bg-blue-500 rounded-l h-12"></div>  
    @break

@default
<div class="w-3 bg-green-500 rounded-l h-12"></div>
@endswitch 