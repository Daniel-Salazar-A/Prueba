<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuario extends Authenticatable
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

    public function getAuthPassword()
    {
        return $this->contraseña;
    }
}
