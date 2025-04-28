<?php

namespace App\Livewire;

use App\Livewire\Forms\CertificationForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCertification extends Component
{
    use WithFileUploads;

    public CertificationForm $form;

    public function save()
    {
        $this->form->store();
        $this->dispatch('refresh-certifications');
    }

    public function render()
    {
        return view('livewire.create-certification');
    }
}
