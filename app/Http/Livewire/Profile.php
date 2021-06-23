<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $user;
    public $name;
    public $surname;

 protected $rules=
   
      [
            'name'  =>  'required|min:3',
            'surname'=>'required|min:3',
        ];
    

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount(){
        $this->email=$this->user->email;
        $this->name=$this->user->name;
        $this->surname=$this->user->surname;
    }
    
    public function onSubmit ()
    {
        $validatedData = $this->validate();
        $this->user->update($validatedData);
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.profile');
    }
}
