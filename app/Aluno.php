<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Aluno extends Model
{
    protected $table = 'pessoas';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'email', 'telefone', 'cpf', 'password'];
    
}
