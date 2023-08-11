<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    use HasFactory;
    protected $table = "tbcategoria";
    protected $fillable = ['categoria'];
    public $timestamps = false;
    protected $primaryKey = 'idCategoria';
}
