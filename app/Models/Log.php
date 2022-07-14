<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    // TABELA CORRESPONDENTE AO MODEL
    protected $table = 'logs';

    // CAMPOS DA TABELA 
    protected $fillable = ['encryption_key'];
}
