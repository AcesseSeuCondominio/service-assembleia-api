<?php

namespace App\Http\Controllers;

use App\Models\Assembleia;
use App\Models\Votacao;

class HomeController extends Controller
{
    public function index()
    {
        $assembleia = Assembleia::findOrFail(539);

        $votacao = Votacao::findOrFail(1170);

        return view('welcome', [
            'assembleia' => $assembleia,
            'votacoes' => [$votacao]
        ]);
    }
}
