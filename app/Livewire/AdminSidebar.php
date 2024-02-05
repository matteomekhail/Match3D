<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminSidebar extends Component
{
    public $content = 'Please select one of the options in the menu';

    public function mount()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        // Trova l'utente corrente
        $user = auth()->user();

        // Controlla se l'utente è un amministratore
        if (!$user->is_admin) {
            return redirect('/login');
        }
    }
    public function render()
    {
        return view('livewire.Admin-Sidebar');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
}
