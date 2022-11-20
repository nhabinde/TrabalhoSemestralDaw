<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    public function estudantes()
    {
        return $this->belongsToMany(Estudante::class)->withPivot('nota');
    }

    public function estudanteLogado()
    {
        $estudante = Estudante::where("user_id", auth()->id())->first();
//        return $this->belongsToMany(Estudante::class)->withPivot('nota')->where('estudantes.id',$estudante->id);
        if ($estudante)
            return $this->belongsToMany(Estudante::class)->withPivot('nota')->wherePivot('estudante_id', $estudante->id);
        else
            return $this->belongsToMany(Estudante::class)->withPivot('nota')->wherePivot('estudante_id', 0);

    }

//    public function estudantesAvaliados(){
//        return $this->belongsToMany(Estudante::class);
//    }
}
