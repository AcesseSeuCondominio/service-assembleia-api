<?php

namespace App\Livewire;

use Livewire\Component;

class ItensVotacao extends Component
{
    public $items;

    protected $listeners = [
        'atualizaVoto' => 'votoRegistrado'
    ];

    public function votoRegistrado()
    {
        $this->moun();
    }

    public function render()
    {
        return view('livewire.itens-votacao');
    }
}
