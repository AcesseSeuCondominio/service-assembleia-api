<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VotacaoResposta extends Model
{
    public $sequence = 'condominio.seq_vre';

    protected $table = 'condominio.asc_votacao_resposta';

    protected $primaryKey = 'vre_codigo';

    protected $fillable = [
        'vre_emp_codigo',
        'vre_usu_codigo',
        'vre_imv_codigo',
        'vre_voi_codigo',
        'vre_justificativa',
        'vre_vot_codigo'
    ];
}
