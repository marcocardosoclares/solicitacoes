<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitacao;
use App\Models\Especialidade;
use App\Models\Status;

class SolicitacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Solicitacao::with('especialidades')->with('status')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Solicitacao::create($request->input());
        return response(['mensagem' => "Registro criado com sucesso", "ok" => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response(Solicitacao::with('especialidades')->where('id',$id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = Solicitacao::with('especialidades')->where('id',$id)->first();
        $response["especialidades_list"] = Especialidade::all();
        $response["status_list"] = Status::all();
        return response($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return response($request->input());
        Solicitacao::where('id',$id)->update($request->input());
        return response(['mensagem' => 'Registro alterado com sucesso',"ok" => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Solicitacao::destroy($id);
    }

    public function search(request $request)
    {
        if ($request->type === "status" && $request->search === "all") {
            return response(Solicitacao::with('especialidades')->with('status')->get());
        }

        $constraint = $request->type === "nome" 
            ? fn($q) => $q->where('nome_paciente','like', "%{$request->search}%")
            : fn($q) => $q->where('status_id',$request->search);
        
        return response(Solicitacao::with('especialidades')->with('status')->where($constraint)->get());
    }
}
