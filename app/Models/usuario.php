<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'correo',
        'contraseña',
        'rol',
        'telefono'
    ];

    protected $hidden = [
        'contraseña',
        'remember_token'
    ];

    protected function casts(): array
    {
        return [
            'contraseña' => 'hashed'
        ];
    }
}
