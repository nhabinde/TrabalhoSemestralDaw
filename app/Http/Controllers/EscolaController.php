<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use App\Models\Estudante;
use App\Models\User;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $escolas = Escola::with("estudantes")->get();
        return view("admin.escolas.index",compact("escolas"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function escolas()
    {
        //
        $escolas = Escola::all();
        return view("admin.escolas.escolher",compact("escolas"));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function escolas_aluno()
    {
        //
        $aluno = Estudante::where("user_id",auth()->id())->with("escolas")->first();
//        return $aluno;
        return view("estudante.escolas",compact("aluno"));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function escolas_aluno_id($estudante_id)
    {
        //
        $aluno = Estudante::where("id",$estudante_id)->with("escolas")->first();
//        return $aluno;
        return view("admin.estudantes.escolas",compact("aluno"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.escolas.create");
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
        $escola = new Escola();
        $escola->nome=$request->nome;
        $escola->localizacao=$request->localizacao;
        $escola->save();

        return back()->with(["status"=>200,"message"=>"Escola salva com sucesso."]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function show(Escola $escola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function edit(Escola $escola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escola $escola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escola $escola)
    {
        //
        $escola->destroy($escola->id);
        return back()->with(["status"=>200,"message"=>"Escola eliminada com sucesso"]);
    }
}
