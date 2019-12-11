<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finais_Felizes extends Model
{
     public function finais_felizes(){
     	 return $this->belongsTo(Finais_Felizes::class);
     }
}
