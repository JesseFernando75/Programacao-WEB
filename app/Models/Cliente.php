<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Compras;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    function compras(){
    	return $this->hasMany(Compras::class, 'id_cliente', 'id');
    }
}
