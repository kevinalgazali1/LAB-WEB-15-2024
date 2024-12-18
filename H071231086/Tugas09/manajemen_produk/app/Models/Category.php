<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', // tambahkan atribut yang akan kamu masukkan ke database
        'description', // jika ada atribut lain yang relevan
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
