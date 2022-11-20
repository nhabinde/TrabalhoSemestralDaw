<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use App\Models\Nivel;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $modulos  = Modulo::with('nivel')->get();
//        $modulos  = Modulo::all();
        return view('admin.modulos.index',compact('modulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $niveis  = Nivel::all();

        return view('admin.modulos.create', compact('niveis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //
            $validatedData = $request->validate([
                'designacao' => ['required', 'unique:App\Models\Modulo,designacao'],
                'nivel_id' => ['required']
            ]);
            $modulo = new Modulo();
            $modulo->designacao = $request->designacao;
            $modulo->nivel_id = $request->nivel_id;
            if ($modulo->save()) {
                return back()->with(['status' => 200, 'message' => "Modulo salvo com sucesso"]);
            } else {
                return back()->with(['status' => 500, 'message' => "Erro ao salvar modulo"]);
            }
        }catch (\Exception $e){
            return back()->with(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function show(Modulo $modulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Modulo $modulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modulo $modulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modulo $modulo)
    {
        //
    }
}
