<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{   
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status', 'data_aula', 'local_aula','horario_aula',
        'descricao_aula','id_aluno','professor_id'
    ];

}
