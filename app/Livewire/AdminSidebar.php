<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use Illuminate\Support\Facades\Storage; // Importa la facciata Storage

class AdminSidebar extends Component
{
    public $content = 'Please select one of the options in the menu';
    public $users; // Aggiungi questa linea


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
        $this->users = User::all();

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
    // Aggiungi questo metodo
    public function serveDocument($filename)
    {
    return Storage::disk('local')->response($filename);
    }
}
