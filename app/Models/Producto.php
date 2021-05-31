<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio_unidad',
        'existencia',
    ];

    public function compras()
    {
      return $this->belongsToMany(Compra::class, 'lista_compras');
    }
}
