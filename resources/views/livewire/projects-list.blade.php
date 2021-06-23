<div class="flex justify-center ">
    <div class="w-full p-4 ">
        <div class="flex justify-between  items-center h-12 mb-3 bg-gray-200 rounded-t-lg">
            <h3 class="text-xl pl-5">Dashboard</h3>

            <div class="relative">
                <input type="search" wire:model="search" class="shadow rounded border-0 p-1" 
                placeholder="Search by name...">
              </div>

            <button onclick="Livewire.emit('openModal', 'add-project')"
                class="bg-green-800 text-white p-1 rounded mr-6 flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg> New Project</button>

        </div>

        <div class="bg-gray-200 rounded-b-lg">
           
            <div class="p-6  mt-6">
                <div class="grid grid-cols-4">
                    @if ($projects->count())
                        
                    
                    @foreach ($projects as $project)
        
                    <div class="mr-3 bg-white shadow-lg rounded-lg  border border-gray-200 mb-5 ">
                        <div class="divide-y divide-gray-400">
                            <a href="{{route('project',$project)}}" class="flex justify-between bg-gray-800 text-white rounded-t-lg hover:bg-gray-600">
                                <p class="text-lg uppercase  pl-2">
                                    {{$project->name}} </p> 
                                    @if($project->user_id==auth()->user()->id)
                                    <p class="capitalize pr-3">-owner-</p>
                                    @else
                                    <p class="capitalize pr-3">-colaborator-</p>
                                    @endif
                                </a>
                            <div class="p-2">
                            <p class=" overflow-ellipsis overflow-hidden  h-16 text-sm">{{$project->about}}</p>
                            <p class="text-sm text-center font-semibold">
                                @if ($project->users->count()==1)
                                Just you work at this project</p> 
                                @else
                                {{$project->users->count()}} people works at this project</p>
                                @endif
                               
                        </div>
                        </div>
                        <div class="m-2 flex justify-between">
                            <button class="bg-blue-800 text-white px-3 py-1 mr-2 rounded">
                               <a href="{{route('project',$project)}}"> Open</a></button>
                            <div>
                                @can('edit', $project)
                               
                                <button wire:click='$emit("openModal", "edit-project",{{ json_encode(["project"=>$project->id]) }})'   

                                class="bg-green-800 text-white px-3 py-1  mr-2 rounded">Edit</button>
                                <button wire:click='$emit("openModal", "delete-project",{{ json_encode(["project"=>$project->id]) }})'  class="bg-red-800 text-white px-3 py-1 rounded">Delete</button>
                                @endcan
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                       
                     @else
                         <p>There are no projects</p>
                     @endif
                   
                </div>
                {{$projects->links()}}
            </div>
        
        </div>
        

    </div>
</div>
