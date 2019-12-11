<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adotar extends Model
{
    	//Chave primária é o id
     protected $primaryKey = 'id';

     public function animals(){
     	 return $this->belongsToMany(Animal::class);
     }

      public function users(){
     	 return $this->belongsToMany(User::class);
     }

      public function finais_felizes(){
     	 return $this->HasOne(Finais_Felizes::class);
     }
}
