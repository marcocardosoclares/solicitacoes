<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoReprovacao;

class MotivoReprovacaoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return response(MotivoReprovacao::all());
    }
}
