<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterForm extends Component
{
    use WithFileUploads;

    public $currentTab = 0;
    public $tabs = ['Account Setup', 'Documents Setup', 'Payment Setup', 'Verification'];

    public $fullname, $mobile, $email, $password, $confirm_password, $address, $suburb, $postcode, $state;
    public $documentType, $documentFront, $documentBack, $documentExtra; // Aggiungi questa linea
    public $betting_accounts, $self_exclusion, $bankruptcy;

    protected $rules = [
        'fullname' => 'required|min:3',
        'mobile' => 'required|numeric',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'confirm_password' => 'required|same:password',
        'address' => 'required',
        'suburb' => 'required',
        'postcode' => 'required|numeric|digits:4',
        'state' => 'required|in:NSW,VIC,QLD,SA,WA,TAS,ACT,NT',
        'documentFront' => 'required|file|mimes:pdf,jpg,jpeg,png',
        'documentBack' => 'required|file|mimes:pdf,jpg,jpeg,png',
        'documentExtra' => 'file|mimes:pdf,jpg,jpeg,png', // Aggiungi questa linea
        'betting_accounts' => 'required|in:yes,no,unsure',
        'self_exclusion' => 'required|in:yes,no,unsure',
        'bankruptcy' => 'required|in:yes,no',
    ];

    public function mount()
    {
        $this->showTab($this->currentTab);
    }

    public function showTab($n)
    {
        $this->currentTab = $n;
    }

    public function nextPrev($n)
    {
        if ($n == 1)
            $this->validateCurrentStep();
        $this->currentTab += $n;

        if ($this->currentTab >= count($this->tabs)) {
            $this->submitForm();
            return;
        }

        $this->showTab($this->currentTab);
    }

    public function validateCurrentStep()
    {
        $this->validate($this->getValidationRulesForStep());
    }
    private function getValidationRulesForStep()
    {
        $stepRules = [
            0 => ['fullname', 'mobile', 'email', 'password', 'confirm_password', 'address', 'suburb', 'postcode', 'state', 'betting_accounts', 'self_exclusion', 'bankruptcy'],
            1 => ['documentFront', 'documentBack', 'documentExtra'], // Aggiungi 'documentExtra' qui
        ];

        return collect($stepRules[$this->currentTab] ?? [])->reduce(function ($rules, $field) {
            $rules[$field] = $this->rules[$field];
            return $rules;
        }, []);
    }

    public function createUserAndGoToNextStep()
    {
        $this->validateCurrentStep();

        $documentFrontBlob = file_get_contents($this->documentFront->getRealPath());
        $documentBackBlob = file_get_contents($this->documentBack->getRealPath());
        $documentExtraBlob = $this->documentExtra ? file_get_contents($this->documentExtra->getRealPath()) : null; // Aggiungi questa linea

        $user = User::create([
            'name' => $this->fullname,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'address' => $this->address,
            'suburb' => $this->suburb,
            'postcode' => $this->postcode,
            'state' => $this->state,
            'betting_accounts' => $this->betting_accounts,
            'self_exclusion' => $this->self_exclusion,
            'bankruptcy' => $this->bankruptcy,
            'documentFront' => $documentFrontBlob,
            'documentBack' => $documentBackBlob,
            'documentExtra' => $documentExtraBlob, // Aggiungi questa linea
        ]);

        $this->nextPrev(1);
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

    public function render()
    {
        return view('livewire.register-form');
    }
}
