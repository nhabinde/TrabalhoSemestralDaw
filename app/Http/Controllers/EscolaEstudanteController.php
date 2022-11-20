<?php

namespace App\Http\Controllers;

use App\Models\EscolaEstudante;
use App\Models\Estudante;
use Illuminate\Http\Request;

class EscolaEstudanteController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $escolas = $request->except("_token", "DataTables_Table_0_length");
        $escolas_ids = array_keys($escolas);

        $estudante = Estudante::where("user_id", auth()->id())->first();

        if ($estudante) {
            foreach ($escolas_ids as $id) {
                $escola = EscolaEstudante::where("escola_id", $id)
                    ->where("estudante_id", $estudante->id)->first();
                if (!$escola){
                    $escolaEstudante = new EscolaEstudante();
                    $escolaEstudante->estudante_id = $estudante->id;
                    $escolaEstudante->escola_id = $id;
                    $escolaEstudante->save();
                }
            }
            return back()->with(["message" => "Escolas adicionadas com sucesso", "status" => 200]);
        } else {
            return back()->with(["message" => "Erro ao adicionar escolas", "status" => 500]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\EscolaEstudante $escolaEstudante
     * @return \Illuminate\Http\Response
     */
    public function show(EscolaEstudante $escolaEstudante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\EscolaEstudante $escolaEstudante
     * @return \Illuminate\Http\Response
     */
    public function edit(EscolaEstudante $escolaEstudante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\EscolaEstudante $escolaEstudante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EscolaEstudante $escolaEstudante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\EscolaEstudante $escolaEstudante
     * @return \Illuminate\Http\Response
     */
    public function destroy(EscolaEstudante $escolaEstudante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\EscolaEstudante $escolaEstudante
     * @return \Illuminate\Http\Response
     */
    public function remover_escola(Request $request)
    {
        //
        $estudante = Estudante::where("user_id", auth()->id())->first();
        if ($estudante) {
            $escolaEstudante = EscolaEstudante::where("escola_id", $request->escola_id)
                ->where("estudante_id", $estudante->id)->first();

            if ($escolaEstudante) {
                $escolaEstudante->destroy($escolaEstudante->id);
                return back()->with(["message" => "Escolas removida com sucesso", "status" => 200]);
            } else {
                return back()->with(["message" => "Erro ao remover escolas", "status" => 500]);
            }
        } else {
            return back()->with(["message" => "Erro ao remover escolas", "status" => 500]);
        }


    }
}
