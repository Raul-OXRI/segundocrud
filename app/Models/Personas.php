<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Personas extends Model
{
    use HasFactory;
    protected $table = 'personas';
    Protected $primarykey = 'id';

    protected $fillable = ['Nombre', 'Apellido', 'DPI', 'NIT','Fecha_nacimiento'];

    public function personas(){
        return $this->hasMany(personas::class, 'personas');
    }
}

