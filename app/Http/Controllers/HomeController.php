<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Docente;
use App\Models\Estudante;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role_id == 3)
            return redirect("/escolas");

        $cursos=Curso::count();
        $estudantes=Estudante::count();
        $docentes=Docente::count();
        return view('admin.index',compact('cursos','estudantes','docentes'));
    }
}
