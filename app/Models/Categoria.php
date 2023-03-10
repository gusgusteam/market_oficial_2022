<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'subcategoria',
        'logo',
        'imagen',
        'idSubCategoria'
    ];
    public $timestamps =false;
}
