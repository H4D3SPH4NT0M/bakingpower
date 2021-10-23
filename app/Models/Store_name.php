<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store_name extends Model
{
    use HasFactory;
    public function store_names()
    {
        return $this->belongsToMany(Product::class);
    }
}
