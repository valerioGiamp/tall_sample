<?php

namespace App\Livewire;

use App\Models\Certification;
use Exception;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class CertificationItem extends Component
{
    public Certification $certification;

    public function delete()
    {
        try {
            Storage::delete($this->certification->path);
            $this->certification->delete();
            $this->dispatch('refresh-certifications');
        } catch(Exception $e) {
            session()->flash('error_message', 'Qualcosa è andato storto');
        }
    }

    public function render()
    {
        return view('livewire.certification-item');
    }
}
