<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //relaciones
    public function libreria(){
        return $this->belongsTo(Libreria::class);
    }

    protected $hidden=['created_at', 'updated_at'];
}
