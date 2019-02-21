<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    //
    public $timestamps = false;

    protected $fillable =['nombre','descripcion','avatar','fecha_publicacion','invitados_especiales','patrocinantes','fecha_evento'];
}


