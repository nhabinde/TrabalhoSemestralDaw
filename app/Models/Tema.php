<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    public function estudante(){
        return $this->belongsTo(Estudante::class);
    }
    public function docente(){
        return $this->belongsTo(Docente::class);
    }
}
