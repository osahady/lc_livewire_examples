<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required|min:5',
    ];

    public function submitForm()
    {
        $this->validate();
        $this->successMessage = 'We received your message successfully and will get back to you shortly!';

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = "";
        $this->email = "";
        $this->phone = "";
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
