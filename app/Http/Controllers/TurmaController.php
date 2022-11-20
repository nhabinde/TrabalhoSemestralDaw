<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Docente;
use App\Models\Estudante;
use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $turmas  = Turma::with('disciplina')->get();
//        if (auth()->user()->role_id==6)

        if (auth()->user()->role->id == 6){
            $docente = Docente::where("user_id",auth()->id())->with("turmas")->first();
            $turmas = $docente->turmas;
//            $turmas  = Turma::with('disciplina')->get();
        }
        return view('admin.turmas.index',compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $disciplinas  = Disciplina::all();
        return view('admin.turmas.create', compact('disciplinas'));
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
                'ano' => ['required', 'digits:4'],
                'descricao' => ['required'],
                'disciplina_id' => ['required']
            ]);
            $turma = new Turma();
            $turma->ano = $request->ano;
            $turma->descricao = $request->descricao;
            $turma->disciplina_id = $request->disciplina_id;
            if ($turma->save()) {
                return back()->with(['status' => 200, 'message' => "Turma salvo com sucesso"]);
            } else {
                return back()->with(['status' => 500, 'message' => "Erro ao salvar turma"]);
            }
        }catch (\Exception $e){
            return back()->with(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {
        //
        $turma  = Turma::where("id",$turma->id)->with('anuncios','disciplina','estudantes','avaliacoes','avaliacoesLogado')->first();
//        return $turma;
        return view("admin.turmas.show", compact("turma"));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function turmas()
    {
        //
        $turmas  = Turma::with(['disciplina','estudantes'=>function($q){
            $estudante = Estudante::where('user_id',auth()->id())->first();
            $q->where('estudantes.id',$estudante->id);
        },'avaliacoes'])->has("estudantes")->get();
        return view("estudante.turmas", compact("turmas"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(Turma $turma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turma $turma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turma $turma)
    {
        //
    }
}
