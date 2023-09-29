<?php

namespace App\Livewire;

use Livewire\Component;

class ItensVotacao extends Component
{
    public $items;
    
    public function render()
    {
        return view('livewire.itens-votacao');
    }
}
