<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    public function apuestas()
    {
        return $this->hasMany(Apuestas::class, 'llave_foranea');
    }
}
