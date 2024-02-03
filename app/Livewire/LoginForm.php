<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Log;

class LoginForm extends Component
{
    public function mount()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
    }


    public $email, $password, $remember;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        Log::info("login fatto");
        try {
            $this->validate();
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }
        Log::info("login fatto2");

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Authentication passed...
            return redirect()->intended('/');
        } else {
            $this->addError('password', 'These credentials do not match our records.');
        }

    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
