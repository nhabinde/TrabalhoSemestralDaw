<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedidos = Pedido::all();
        if (auth()->user()->role_id == 7){
            $pedidos = Pedido::where('is_rh',true)->get();
        }
        if (auth()->user()->role_id == 6){
            $pedidos = Pedido::where("user_id",auth()->id())->get();
        }
        return view("admin.temas.index", compact("pedidos"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view("admin.temas.create");
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

        $pedido = new Pedido();
        $pedido->descricao = $request->descricao;
        $pedido->user_id = auth()->id();
        $pedido->is_rh = auth()->user()->role_id==7?true:false;
        $pedido->doc_url = $url;

        $pedido->save();
        return back()->with(["message"=>"Pedido submetido com sucesso","status"=>200]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function documento(Request $request)
    {
        //
        $url = null;

        try {
            $anexos = $request->file('file')[0]->store('public/anexos');
            $url = substr($anexos, 6, strlen($anexos) - 1);
        }catch (\Exception $e){
            return $e;
        }

        $pedido = Pedido::where("id",$request->pedido_id);
        if ($pedido){
//            $pedido->doc_url = $url;
            $pedido->update(["doc_url"=>$url]);
            return back()->with(["message"=>"Documento carregado com sucesso","status"=>200]);
        }else{
            return "Erro!";
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aprovar($id)
    {
        $pedido = Pedido::where("id",$id)->first();
        if ($pedido){
            $pedido->is_pendente = false;
            $pedido->estado = true;
            $pedido->update();
            return back()->with(["message"=>"Pedido aprovado com sucesso","status"=>200]);
        }else{
            return "Erro!";
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reprovar($id)
    {
        $pedido = Pedido::where("id",$id)->first();
        if ($pedido){
            $pedido->is_pendente = false;
            $pedido->estado = false;
            $pedido->update();
            return back()->with(["message"=>"Pedido reprovado com sucesso","status"=>200]);
        }else{
            return "Erro!";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
