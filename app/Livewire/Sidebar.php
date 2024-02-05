<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Sidebar extends Component
{
    public $content = 'Please select one of the options in the menu';
    public $bankUsername;
    public $bankPassword;
    public $bankCodes;
    public $bankCardReceived;

    public $name, $email, $address, $suburb, $postcode, $state, $password;

    public function mount()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        // Trova l'utente corrente
        $user = auth()->user();

        // Imposta i valori iniziali delle proprietà del componente
        $this->bankUsername = $user->bankUsername;
        $this->bankPassword = $user->bankPassword;
        $this->bankCodes = $user->bankCodes;
        $this->bankCardReceived = $user->bankCardReceived;

        $this->name = $user->name;
        $this->email = $user->email;
        $this->address = $user->address;
        $this->suburb = $user->suburb;
        $this->postcode = $user->postcode;
        $this->state = $user->state;
    }
    public function render()
    {
        return view('livewire.sidebar');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function saveBankAccountDetails()
    {
        $this->validate([
            'bankUsername' => 'required',
            'bankPassword' => 'required',
            'bankCardReceived' => 'required',
        ]);

        // Trova l'utente corrente
        $user = auth()->user();

        // Aggiorna i dati dell'utente
        $user->update([
            'bankUsername' => $this->bankUsername,
            'bankPassword' => $this->bankPassword, // Non hashare la password
            'bankCodes' => $this->bankCodes,
            'bankCardReceived' => $this->bankCardReceived,
        ]);

        // Messaggio di successo
        $this->dispatch('alert', ['message' => 'User Details successfully saved.']);
    }

    public function updateProfile()
    {
        $user = auth()->user();

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'suburb' => $this->suburb,
            'postcode' => $this->postcode,
            'state' => $this->state,
            'password' => Hash::make($this->password),
        ]);

        $this->dispatch('alert', ['message' => 'Profile updated successfully']);
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}
