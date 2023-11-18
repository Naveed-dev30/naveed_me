<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.master')]
    public function render()
    {
        return view('livewire.index');
    }
}
