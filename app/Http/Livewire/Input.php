<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{
    public $message;
    public $message2;
    public $message3;
    public $message4;
    public function render()
    {
        return view('livewire.input');
    }
}
