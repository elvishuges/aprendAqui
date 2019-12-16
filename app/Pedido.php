<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'status', 'date', 'horario_aula','descricao_aula','horaio_aula','id_aluno'
    ];

}
