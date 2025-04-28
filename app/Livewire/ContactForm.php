<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm as FormsContactForm;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public FormsContactForm $form;

    public function sendEmail()
    {
        $this->form->sendEmail();
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
