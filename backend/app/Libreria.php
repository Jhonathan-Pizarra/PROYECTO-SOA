<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libreria extends Model
{
    //relaciones
    public function libro(){
        return $this->hasMany(Libro::class);
    }

    protected $hidden=['created_at', 'updated_at'];

}
