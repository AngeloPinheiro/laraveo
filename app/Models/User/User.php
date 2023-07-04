<?php

namespace App\Models\User;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    protected $table = 'base_usuario';

    protected $fillable = [
        'nome', 'email',
    ];

    protected $hidden = [
        'senha',
        'ws_chave',
        'ws_chave_fixa',
        'rfid',
        'mfa_secret',
        'last_passwords',
    ];
}
