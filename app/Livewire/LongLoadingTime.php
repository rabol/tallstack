<?php

namespace App\Livewire;

use Livewire\Component;

class LongLoadingTime extends Component
{
    public $title;
    public $content;


    public function test(): void
    {
        sleep(10);
    }
    public function render()
    {
        sleep(10);
        return view('livewire.long-loading-time');
    }

    public function save()
    {
        sleep(10);
    }
}
