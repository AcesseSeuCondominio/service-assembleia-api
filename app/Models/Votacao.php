<?php

namespace App\Models;

use App\Models\VotacaoResposta;
use Illuminate\Database\Eloquent\Model;

class Votacao extends Model
{
    public $sequence = 'condominio.seq_vot';

    protected $table = 'condominio.asc_votacao';

    protected $primaryKey = 'vot_codigo';

    protected $fillable = [
        'vot_emp_codigo',
        'vot_ass_codigo',
        'vot_pergunta',
        'vot_data_hora_inicio',
        'vot_data_hora_fim',
        'vot_requer_justificativa',
        'vot_liberado_votacao'
    ];

    public function votacaoRespostas()
    {
        return $this->hasMany(VotacaoResposta::class, 'vre_vot_codigo', 'vot_codigo');
    }

    public function votacaoItens()
    {
        return $this->hasMany(VotacaoItem::class, 'voi_vot_codigo', 'vot_codigo');
    }
}
