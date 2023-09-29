<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VotacaoResposta;

class InfoVotacao extends Component
{
    public $votacao;

    public function render()
    {
        return view('livewire.info-votacao');
    }

    public function aprovar()
    {
        VotacaoResposta::create([
            'vre_emp_codigo' => 705,
            'vre_usu_codigo' => auth('web')->user()->usu_codigo,
            'vre_voi_codigo' => 2639,
            'vre_vot_codigo' => 1170
        ]);
    }

    public function negar()
    {
        VotacaoResposta::create([
            'vre_emp_codigo' => 705,
            'vre_usu_codigo' => auth('web')->user()->usu_codigo,
            'vre_voi_codigo' => 2640,
            'vre_vot_codigo' => 1170
        ]);
    }
}
