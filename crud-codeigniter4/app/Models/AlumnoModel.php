<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnoModel extends Model
{
    protected $table = 'alumnos';
    protected $primaryKey = 'alumno';

    protected $allowedFields = [
        'nombre',
        'apellido',
        'direccion',
        'movil',
        'email',
        'fecha_creacion',
        'user',
        'inactivo'
    ];
}