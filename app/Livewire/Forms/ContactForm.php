<?php

namespace App\Livewire\Forms;

use App\Mail\ContactEmail;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate('required|string')]
    public $firstName;

    #[Validate('required|string')]
    public $lastName;

    #[Validate('required|string')]
    public $email;

    #[Validate('required|string')]
    public $phoneNumber;

    #[Validate('required|string')]
    public $text;

    public function sendEmail()
    {
        try {
            Mail::to('your_email@gmail.com')->send(
                new ContactEmail(
                    $this->firstName,
                    $this->lastName,
                    $this->email,
                    $this->phoneNumber,
                    $this->text
                )
            );
            $this->reset();
            session()->flash('message', 'Email inviata con successo! Ti ricontatteremo il prima possibile');

        } catch(Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
