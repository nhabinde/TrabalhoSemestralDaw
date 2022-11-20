<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Estudante;
use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedidos = Tema::with("estudante","docente")->get();
        return view("estudante.temas.index", compact("pedidos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("estudante.temas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $url = null;

        try {
            $anexos = $request->file('file')[0]->store('public/anexos');
            $url = substr($anexos, 6, strlen($anexos) - 1);
        }catch (\Exception $e){
//            return $e;
        }

        $estudante = Estudante::where("user_id",  auth()->id())->first();
        if($estudante){
            $tema = new Tema();
            $tema->descricao = $request->descricao;
            $tema->estudante_id =$estudante->id;
            $tema->doc_url = $url;
            $tema->observacao = "---";
            $tema->save();
            return back()->with(["message"=>"Pedido submetido com sucesso","status"=>200]);
        }else{
            return back()->with(["message"=>"Erro ao submeter o pedido. O utilizador tem de ser um aluno.","status"=>500]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(Tema $tema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(Tema $tema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tema $tema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tema $tema)
    {
        //
    }

    public function aprovar($id)
    {
        $pedido = Tema::where("id",$id)->first();
        if ($pedido){
            $pedido->is_pendente = false;
            $pedido->estado = true;
            $pedido->update();
            return back()->with(["message"=>"Pedido aprovado com sucesso","status"=>200]);
        }else{
            return "Erro!";
        }
    }

    public function reprovar(Request $request)
    {
        $pedido = Tema::where("id",$request->tema_id)->first();
        $docente = Docente::where("user_id",auth()->id())->first();
        if ($pedido and $docente){
            $pedido->is_pendente = false;
            $pedido->estado = false;
            $pedido->docente_id = $docente->id;
            $pedido->observacao = $request->observacao;
            $pedido->update();
            return back()->with(["message"=>"Pedido reprovado com sucesso","status"=>200]);
        }else{
            return "Erro!";
        }
    }
}
