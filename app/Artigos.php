<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigos extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome_veiculo', 'link', 'ano', 'combustivel', 'portas', 'quilometragem', 'cambio', 'cor'
    ];

}
