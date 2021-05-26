<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'precio_total',
        'usuario',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function productos()
    {
      return $this->belongsToMany(Producto::class, 'lista_compras')->withPivot('cantidad');
    }
}
