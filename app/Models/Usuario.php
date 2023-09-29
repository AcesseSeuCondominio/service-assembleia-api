<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    public $sequence = 'fwk.seq_usu';

    protected $table = 'fwk.fwk_usuarios';

    protected $primaryKey = 'usu_codigo';

    protected $fillable = [
        'usu_nome',
        'usu_login',
        'usu_senha',
        'usu_ativo',
        'usu_email',
        'usu_registros_por_pagina',
        'usu_cor_tela',
        'usu_asc',
        'usu_senha_api',
        'password',
        'usu_password_expired'
    ];

    protected $attributes = [
        'usu_cor_tela' => 'main',
        'usu_password_expired' => 'N'
    ];

    protected $hidden = ['usu_senha', 'usu_senha_api'];
}
