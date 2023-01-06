<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'tipos';

    protected $fillable = [
        'nombre',
        'idCategoria',
        'imagen',
        'logo',
       
    ];
    public $timestamps = false;
}
