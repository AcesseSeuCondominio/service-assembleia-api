<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assembleia extends Model
{
    public $sequence = 'condominio.seq_ass';

    protected $table = 'condominio.asc_assembleia';

    protected $primaryKey = 'ass_codigo';

    protected $fillable = [
        'ass_emp_codigo',
        'ass_data_hora_inicio',
        'ass_nome',
        'ass_pauta',
        'ass_usu_codigo',
        'ass_sas_codigo',
        'ass_data_hora_fim',
        'ass_ativar_discussao_geral',
        'ass_ativar_aovivo',
        'ass_usu_codigo_presidente'
    ];
}
