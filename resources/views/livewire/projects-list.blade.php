<div class="flex justify-center ">
    <div class="w-full p-4 ">
        <div class="flex justify-between  items-center h-12 mb-3 bg-gray-200 rounded">
            <h3 class="text-xl pl-5">Dashboard</h3>

            <div class="relative">
                <input type="search" wire:model="search" class="shadow rounded border-0 p-1" placeholder="Search by name...">
              </div>

            <button onclick="Livewire.emit('openModal', 'add-project')"
                class="bg-green-800 text-white p-1 rounded mr-6">+ New Project</button>

        </div>

        <div class="bg-gray-200 rounded">
           
            <div class="p-6  mt-6">
                <div class="grid grid-cols-4">
                    @if ($projects->count())
                        
                    
                    @foreach ($projects as $project)
        
                    <div class="mr-3 bg-white shadow-lg rounded-lg  border border-gray-200 mb-5 ">
                        <div class="divide-y divide-gray-400">
                            <a href="{{route('project',$project)}}">
                                <p class="text-lg capitalize bg-gray-800 pl-2 text-white rounded-t-lg hover:bg-gray-600">
                                    {{$project->name}}</p></a>
                            <div class="p-2">
                            <p class="overflow-auto-y  h-12 text-sm">{{$project->about}}</p>
                            <p class="text-sm text-center">{{$project->users->count()}} persoane</p>
                        </div>
                        </div>
                        <div class="m-2 flex justify-between">
                            <button class="bg-blue-800 text-white px-3 py-1 mr-2 rounded">Open</button>
                            <div>
                                <button class="bg-green-800 text-white px-3 py-1  mr-2 rounded">Edit</button>
                                <button class="bg-red-800 text-white px-3 py-1 rounded">Delete</button>
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