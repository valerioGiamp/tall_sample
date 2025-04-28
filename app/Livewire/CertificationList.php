<?php

namespace App\Livewire;

use App\Models\Certification;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class CertificationList extends Component
{
    public Collection $certifications;

    public function init()
    {
        $this->certifications = Certification::all();
    }
    public function mount()
    {
        $this->init();
    }

    #[On('refresh-certifications')]
    public function refreshCertifications()
    {
        $this->init();
    }
    public function render()
    {
        return view('livewire.certification-list');
    }
}
