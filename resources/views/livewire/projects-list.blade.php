<div class="flex justify-center bg-gray-100">
    <div class="w-full p-6  divide-y divide-gray-800">
        <div class="flex justify-between  items-center">
            <h3 class="text-xl pl-5">Dashboard</h3>

            <div class="relative">
                <input type="search" wire:model="search" class="bg-purple-white shadow rounded border-0 p-2" placeholder="Search by name...">
              </div>

            <button onclick="Livewire.emit('openModal', 'add-project')"
                class="bg-green-800 text-white p-2 rounded font-medium ">+ New Project</button>

        </div>

        <div class="p-6  mt-6">
           
            <div class="">
                <div class="grid grid-cols-4">
                    @if ($projects->count())
                        
                    
                    @foreach ($projects as $project)
        
                    <div class="mr-3 bg-white shadow-lg rounded-lg p-1 border border-gray-200 mb-5 ">
                        <div class="divide-y divide-gray-400">
                            <p class="text-lg capitalize">{{$project->name}}</p>
                            <p class="overflow-autoy  h-12 text-sm">{{$project->about}}</p>
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