<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Docente;
use App\Models\DocenteTurma;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $docentes  = Docente::all();
        return view('admin.docentes.index',compact('docentes'));
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
        return view('admin.docentes.create', compact('cursos'));


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
            'email_pessoal' => ['required','unique:App\Models\User,email'],
            'celular' => 'digits:9',
            'celular2' => 'digits:9',
        ]);

        //
        $verify_email=User::where("email",$request->email_pessoal)->first();
        if($verify_email){
            return "Ja existe usuario com este email";
        }
        else{
            $user = new User();
            $user->name = $request->nome." ".$request->apelido;
            $user->email=$request->email_pessoal;
            $user->password=Hash::make("123456789");
            $user->role_id=6;
            if($user->save()){
                $usuario=User::where("email",$request->email_pessoal)->first();

                $docente = new Docente();
                try {
                    $docente_salvo=$docente->create([
                        'user_id'=>$usuario->id,
                        'nome'=>$request->nome,
                        'apelido'=>$request->apelido,
                        'nacionalidade'=>$request->nacionalidade,
                        'naturalidade'=>$request->naturalidade,
                        'data_de_nascimento'=>$request->data_de_nascimento,
                        'morada'=>$request->morada,
                        'sexo'=>$request->sexo,
                        'codigo'=>12345,
                        'celular'=>$request->celular,
                        'celular2'=>$request->celular2,
                    ]);
                    if($docente_salvo){
//                        return "Docente salvo com sucesso";
                        $docente_salvo->codigo=$codigo+$docente_salvo->id;
                        $docente_salvo=$docente_salvo->save();
                        return redirect()->route('admin.docentes.index');
                    }else{
                        $usuario->destroy($usuario->id);
                        return "Nao foi possivel adicionar o docente";
                    }
                }catch (Exception $e){
                    $usuario->destroy($usuario->id);
                    return "Nao foi possivel adicionar o docente";
                }



            }else{
                return "Erro ao salvar usuario";
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        //
    }

    public function pesquisa($turma_id){
        return Docente::with(['user','turma'=>function($query)use($turma_id){
            $query->where('turmas.id',$turma_id);
        }])->get();
    }

    public function docentesTurma($turma_id){
        $turma =  Turma::where('id',$turma_id)->with('docentes')->first();
        return $turma->docentes;
    }

    public function inscrever(Request $request){
        $verificar_inscricao = DocenteTurma::where('docente_id',$request->docente_id)
            ->where('turma_id',$request->turma_id)->first();
        if ($verificar_inscricao){
            return ["status"=>500, "message"=>'O Docente já está inscrito a essa turma'];
        }
        $inscricao = new DocenteTurma();
        $inscricao->docente_id = $request->docente_id;
        $inscricao->turma_id = $request->turma_id;
        $inscricao->save();
        return ["status"=>200, "message"=>'Inscricao feita com sucesso'];
    }
}
