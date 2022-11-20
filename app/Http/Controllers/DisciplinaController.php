<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
 use App\Models\Modulo;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $disciplinas  = Disciplina::with('modulo')->get();
//        $disciplinas  = Disciplina::all();
        return view('admin.disciplinas.index',compact('disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $modulos  = Modulo::all();
        return view('admin.disciplinas.create', compact('modulos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        try {
            //
            $validatedData = $request->validate([
                'nome' => ['required', 'unique:App\Models\Disciplina,nome'],
                'modulo_id' => ['required']
            ]);
            $modulo = new Disciplina();
            $modulo->nome = $request->nome;
            $modulo->modulo_id = $request->modulo_id;
            if ($modulo->save()) {
                return back()->with(['status' => 200, 'message' => "Disciplina salvo com sucesso"]);
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
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit(Disciplina $disciplina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disciplina $disciplina)
    {
        //
    }
}
