<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    public $timestamps = false;
    use HasFactory;


    protected $table = 'salon';
    //protected $primaryKey = 'id_salon'; sino no muestra el valor del id del salon correctamente

    protected $fillable = [
        'id_salon',
        'capacidad',
        'tipo',
        'ubicacion',
        'nivel',
        'disponibilidad',
    ];
}
