<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function inventory_log()
    {
        return $this->hasMany(InventoryLog::class);
    }

    protected $fillable = [
        'category_id',
        'name', // tambahkan atribut yang akan kamu masukkan ke database
        'description',
        'price',
        'stock',
         // jika ada atribut lain yang relevan
    ];
}
