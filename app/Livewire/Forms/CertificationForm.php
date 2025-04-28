<?php

namespace App\Livewire\Forms;

use App\Models\Certification;
use Exception;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CertificationForm extends Form
{
    public ?Certification $certification;

    #[Validate('required|string')]
    public $name;

    #[Validate('nullable|string')]
    public $description;

    #[Validate('file|max:1024')]
    public $file;

    public function store()
    {
        $validated = $this->validate();
        try {
            $name = str_replace(' ', '_', strtolower($validated['name']));
            $path = $this->file->storeAs(path: 'certifications', name: $name . '.pdf');
            $certification = Certification::create([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'path' => $path,
            ]);
            session()->flash(
                'message',
                sprintf('Certificazione %s salvata con successo!', $certification->name)
            );

        } catch(Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }


}
