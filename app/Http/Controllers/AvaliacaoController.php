<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\AvaliacaoEstudante;
use App\Models\Docente;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if (!auth()->user())
            return ['status'=>503,'message'=>"Erro ao salvar. Não permitido. Por favor, faça login e tente novamente!"];
            //abort(503, "Nao permitido");

//        $docente = Docente::where("user_id", auth()->id())->first();
//        if (!$docente and !auth()->user()->role_id==1)
//            return ['status'=>503,'message'=>"Erro ao salvar. Não permitido, Apenas Professores podem effectuar essa operacao!"];

        $avaliacao = new Avaliacao();
        $avaliacao->turma_id = $request->turma_id;
        $avaliacao->peso = $request->peso;
        $avaliacao->descricao = $request->descricao;
        $avaliacao->data_realizacao = $request->data;
        $avaliacao->user_id = auth()->id();

//        $avaliacao->docente_id = $docente->id;
        if($avaliacao->save()){
            return ['status'=>200,'message'=>"Salvo com sucesso"];
        }
        else{
            return back()->with(['status'=>500,'message'=>"Erro ao salvar"]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function show(Avaliacao $avaliacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Avaliacao $avaliacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avaliacao $avaliacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avaliacao  $avaliacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avaliacao $avaliacao)
    {
        //
    }

    public function avaliacoesTurma($turma_id){
        return Avaliacao::where('turma_id',$turma_id)->get();
    }

    public function avaliarAluno(Request $request){
        $avaliacao = new AvaliacaoEstudante();
        $avaliacao->nota=$request->nota;
        $avaliacao->estudante_id=$request->aluno_id;
        $avaliacao->avaliacao_id=$request->avaliacao_id;
        $avaliacao->save();
        return back()->with(["message"=>"Avaliacao submetida com sucesso","status"=>200]);
    }

    public function avaliarEstudantes($avaliacao_id, $turma_id){
        $turma  = Turma::where("id",$turma_id)->with('disciplina','estudantes','avaliacoesLogado')->first();
        $avaliacao = Avaliacao::where("id",$avaliacao_id)->with("estudantes")->first();
//        $alunosAvaliados = $avaliacao->estudantes->pluck("id");
        $ids = [];
        foreach ($avaliacao->estudantes as $estudante){
            $ids[]=$estudante->id;
        }
        $alunos = [];
        foreach($turma->estudantes as $estudante){
            if (in_array($estudante->id,  $ids))
            {
            }
            else
            {
                $alunos[$estudante->id]=$estudante;
            }
        }
        return view("admin.turmas.evaluate",compact("turma","avaliacao","alunos"));

    }
}
