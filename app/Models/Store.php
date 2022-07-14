<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    // TABELA CORRESPONDENTE AO MODEL
    protected $table = 'store';

    // CAMPOS DA TABELA
    protected $fillable = ['name', 'email'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
