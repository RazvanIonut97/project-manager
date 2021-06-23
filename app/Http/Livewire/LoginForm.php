<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;
    public $remember;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function onSubmit ()
    {
        $validatedData = $this->validate();

        if(!auth()->attempt($validatedData,$this->remember) ){
            return back()->with('status','Invalid login details');
        }

        return redirect()->route('dashboard');
    }
    
    public function render()
    {
        return view('livewire.login-form');
    }
}
