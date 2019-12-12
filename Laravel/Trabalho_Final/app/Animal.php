<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function users(){
     	 return $this->belongsTo(User::class);
     }

     public function adotars(){
     	 return $this->hasMany(Adotar::class);
     }

     protected $fillable = [
        'user_dono_id', 'especie', 'sexo', 'nome', 'descricao','cidade', 'estado','cep',
    ];
}
