<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;


class RegisterForm extends Component
{
    use WithFileUploads;

    public $currentTab = 0;
    public $tabs = ['Account Setup', 'Documents Setup', 'Payment Setup', 'Verification'];

    public $fullname, $mobile, $email, $password, $confirm_password, $document;

    protected $rules = [
        'fullname' => 'required|min:3',
        'mobile' => 'required|numeric',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'confirm_password' => 'required|same:password',
        'document' => 'file|mimes:pdf,jpg,jpeg,png', // Aggiungi qui altri tipi di file se necessario
    ];

    public function mount()
    {
        $this->showTab($this->currentTab);
    }
    public function render()
    {
        return view('livewire.register-form');
    }
    public function showTab($n)
    {
        $this->currentTab = $n;
    }

    public function nextPrev($n)
    {
        // Solo se si sta avanzando al prossimo step
        if ($n == 1) {
            $this->validateCurrentStep();
        }

        $this->currentTab += $n;

        // Verifica se si è arrivati alla fine dei tab
        if ($this->currentTab >= count($this->tabs)) {
            $this->submitForm(); // Assicurati che esista questo metodo per gestire il submit
            return;
        }

        $this->showTab($this->currentTab);
    }

    public function validateCurrentStep()
    {
        $rules = $this->getValidationRulesForStep();
        $this->validate($rules);
    }

    private function getValidationRulesForStep()
    {
        // Estrai solo le regole pertinenti per lo step corrente
        switch ($this->currentTab) {
            case 0:
                return [
                    'fullname' => $this->rules['fullname'],
                    'mobile' => $this->rules['mobile'],
                    'email' => $this->rules['email'],
                    'password' => $this->rules['password'],
                    'confirm_password' => $this->rules['confirm_password'],
                ];
            case 1:
                return [
                    'document' => $this->rules['document'],
                ];
            // Altri step, se necessario
            default:
                return [];
        }
    }

    public function handleFormSubmit()
    {
        if ($this->currentTab < count($this->tabs) - 1) {
            // Non siamo all'ultimo step, quindi procediamo al prossimo step.
            $this->nextPrev(1);
        } else {
            // Siamo all'ultimo step, quindi inviamo il form.
            $this->submitForm();
        }
    }
    public function updatedDocument()
    {
        // Validiamo il documento appena caricato
        $this->validate([
            'document' => 'file|mimes:pdf,jpg,jpeg,png', // Aggiungi qui altri tipi di file se necessario
        ]);

        // Se la validazione ha successo, procediamo al prossimo step
        $this->nextPrev(1);
    }
}
