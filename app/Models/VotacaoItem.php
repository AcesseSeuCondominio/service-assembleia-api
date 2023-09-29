<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VotacaoItem extends Model
{
    public $sequence = 'condominio.seq_voi';

    protected $table = 'condominio.asc_votacao_item';

    protected $primaryKey = 'voi_codigo';

    protected $fillable = [
        'voi_emp_codigo',
        'voi_vot_codigo',
        'voi_item_descricao',
        'voi_ordem'
    ];
}
