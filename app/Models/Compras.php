<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CLiente;


class Compras extends Model
{
    use HasFactory;

    protected $table = 'compras';

    function cliente(){
    	return $this->hasOne(Cliente::class, 'id', 'id_cliente');
    }

}
