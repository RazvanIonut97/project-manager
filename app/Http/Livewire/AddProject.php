<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class AddProject extends ModalComponent
{
    //
    
    public $name;
    public $about;

    protected $rules = [
        'name' => 'required',
        'about' => 'required',
    ];

    public function onSubmit()
    {
        $validatedData = $this->validate();
        $validatedData['user_id']=auth()->user()->id;
        auth()->user()->projects()->create($validatedData);
        $this->emitTo('projects-list', 'refreshProjects');
        $this->closeModal();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.add-project');
    }
    
}
