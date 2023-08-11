<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    use HasFactory;
    protected $table = "tbproduto";
    public $timestamps = false;
    protected $fillable = ['idCategoria', 'produto', 'valor', 'quantidade', 'descprod'/*, 'imagem'*/];
    protected $primaryKey = 'idProduto';
}