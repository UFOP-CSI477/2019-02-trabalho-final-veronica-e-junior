<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finais extends Model
{
    public function finais_felizes(){
     	 return $this->belongsTo(Adotar::class);
     }
}
