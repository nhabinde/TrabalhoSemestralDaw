<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Estudante;
use App\Models\EstudanteTurma;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudantes  = Estudante::with('curso','user')->get();
        return view('admin.estudantes.index',compact('estudantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cursos = Curso::all();
        return view('admin.estudantes.create', compact('cursos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codigo = date('Y0000');

        $validatedData = $request->validate([
            'nome' => ['required', 'min:3'],
            'apelido' => ['required', 'min:3'],
            'nacionalidade' => ['required', 'min:3'],
            'sexo' => ['required'],
            'email_pessoal' => ['required','unique:App\Models\User,email'],
            'celular' => 'digits:9',
            'celular2' => 'digits:9',
        ]);
//            'curso_id' => ['required', 'digits'],
        //
        $verify_email=User::where("email",$request->email_pessoal)->first();
        if($verify_email){
            return back()->with(['status'=>500, 'message'=>"Ja existe usuario com este email"]);
        }
        else{
            $user = new User();
            $user->name = $request->nome." ".$request->apelido;
            $user->email=$request->email_pessoal;
            $user->password=Hash::make("123456789");
            $user->role_id=3;
            if($user->save()){
                $usuario=User::where("email",$request->email_pessoal)->first();

                $estudante = new Estudante();
                try {
                    $estudante_salvo=$estudante->create([
                        'user_id'=>$usuario->id,
                        'nome'=>$request->nome,
                        'apelido'=>$request->apelido,
                        'nacionalidade'=>$request->nacionalidade,
                        'naturalidade'=>$request->naturalidade,
                        'data_de_nascimento'=>$request->data_de_nascimento,
                        'morada'=>$request->morada,
                        'sexo'=>$request->sexo,
                        'codigo'=>Hash::make(12345678),
                        'celular'=>$request->celular,
                        'celular2'=>$request->celular2,
                    ]);
//                        'curso_id'=>$request->curso_id,
                    if($estudante_salvo){
                        return back()->with(['status'=>200, 'message'=>"Estudante salvo com sucesso"]);
                    }else{
                        $usuario->destroy($usuario->id);
                        return back()->with(['status'=>500, 'message'=>"Nao foi possivel adicionar o estudante"]);
                    }
                }catch (Exception $e){
                    $usuario->destroy($usuario->id);
                    return back()->with(['status'=>500, 'message'=>"Nao foi possivel adicionar o estudante"]);
                }

            }else{
                return back()->with(['status'=>500, 'message'=>"Nao foi possivel adicionar o estudante"]);
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return  "Show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return  "Edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudante $estudante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudante $estudante)
    {
        //
    }

    public function pesquisa($turma_id){
        return Estudante::with(['user','turma'=>function($query)use($turma_id){
            $query->where('turmas.id',$turma_id);
        }])->get();
    }

    public function inscrever(Request $request){
        $verificar_inscricao = EstudanteTurma::where('estudante_id',$request->estudante_id)
            ->where('turma_id',$request->turma_id)->first();
            if ($verificar_inscricao){
                return ["status"=>500, "message"=>'O aluno já está inscrito a essa turma'];
            }
        $inscricao = new EstudanteTurma();
        $inscricao->estudante_id = $request->estudante_id;
        $inscricao->turma_id = $request->turma_id;
        $inscricao->save();
        return ["status"=>200, "message"=>'Inscricao feita com sucesso'];
    }

    public function estudantesTurma($turma_id){
        $turma =  Turma::where('id',$turma_id)->with('estudantes')->first();
        return $turma->estudantes;
    }
}
