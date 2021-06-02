<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component
{
    public $name;
    public $surname;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|min:3',
        'surname' => 'required|min:3',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed|min:6',
    ];
    public function onSubmit ()
    {
        $validatedData = $this->validate();

        $validatedData['password']=Hash::make($this->password);
        User::create($validatedData);
        auth()->attempt(['email' => $this->email, 'password' => $this->password]);
        return redirect()->route('dashboard');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.register-form');
    }
}
