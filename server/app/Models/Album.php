<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    /* pegar as faixas relacionadas */

    public function faixas(){
        return $this->hasMany(Faixa::class);
    }
}
