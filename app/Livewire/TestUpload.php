<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class TestUpload extends Component
{
    use WithFileUploads;

    public $test;
    public function render()
    {
        return view('livewire.test-upload');
    }
}
