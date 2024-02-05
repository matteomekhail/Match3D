<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class AdminLogin extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Get the currently authenticated user
            $user = Auth::user();

            // Check if the user is an admin
            if ($user->is_admin) {
                return redirect()->intended('dashboardAdmin');
            } else {
                Auth::logout();
                session()->flash('error', 'You are not an admin.');
            }
        } else {
            session()->flash('error', 'Invalid credentials.');
        }
    }

    public function render()
    {
        return view('livewire.admin-login');
    }
}
