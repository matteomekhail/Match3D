<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class Sidebar extends Component
{
    public $content = 'Please select one of the options in the left menu';

    public function render()
    {
        return view('livewire.sidebar');
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
