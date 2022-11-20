<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;


    protected $fillable = ["ano", "descricao", "disciplina_id"];

    public function disciplina(){
        return $this->belongsTo(Disciplina::class)->with('modulo');
    }
    public function estudantes(){
        return $this->belongsToMany(Estudante::class)->with('user');
    }
    public function docentes(){
        return $this->belongsToMany(Docente::class)->with('user');
    }
    public function estudantes_nao_avaliados(){
        return $this->belongsToMany(Estudante::class)->with('user')->whereDoesntHave("avaliacao");
    }
    public function avaliacoes(){
        return $this->hasMany(Avaliacao::class)->with('estudantes');
    }
    public function avaliacoesLogado(){
        return $this->hasMany(Avaliacao::class)->with('estudanteLogado')->has('estudanteLogado');
    }
    public function anuncios(){
        return $this->hasMany(Anuncio::class);
    }
}
