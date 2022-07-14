<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // TABELA CORRESPONDENTE AO MODEL
    protected $table = 'products';

    // CAMPOS DA TABELA
    protected $fillable = ['name', 'price', 'active'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
