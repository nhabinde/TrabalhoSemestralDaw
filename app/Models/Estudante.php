<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nome', 'apelido', 'nacionalidade', 'naturalidade', 'data_de_nascimento', 'morada', 'codigo', 'celular', 'celular2', 'sexo'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function turma()
    {
        return $this->belongsToMany(Turma::class);
    }

    public function escolas(){
        return $this->belongsToMany(Escola::class);
    }
}
