<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $fillable = ["nome", "modulo_id"];

    public function modulo(){
        return $this->belongsTo(Modulo::class)->with('nivel');
    }
}
