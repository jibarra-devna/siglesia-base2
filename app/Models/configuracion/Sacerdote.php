<?php

namespace App\Models\configuracion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sacerdote extends Model
{
    use HasFactory;
    protected $table = 'sacerdotes';
    protected $primaryKey = 'id_sacerdote';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre_sacerdote',
        'apellidos_sacerdote',
        'titulo',
        'fecha_nacimiento',
        'periodo_inicio',
        'periodo_fin',
    ];
}
