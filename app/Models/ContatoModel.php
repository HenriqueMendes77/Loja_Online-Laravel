<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    use HasFactory;
    protected $table = "tbContato";
    protected $fillable = ['nome', 'email', 'fone', 'assunto', 'mensagem'];
    public $timestamps = false;

}
