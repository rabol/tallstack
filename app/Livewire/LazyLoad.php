<?php

namespace App\Livewire;

use Livewire\Component;

class LazyLoad extends Component
{

    public $amount;

    public function mount()
    {
        sleep(2);
        // Slow database query...
        $this->amount = 500;
    }

    public function render()
    {
        return view('livewire.lazy-load');
    }
}
