<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password;

    public function register()
    {
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);
        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
