<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Care extends Model
{
    use HasFactory;

    protected $table = 'cares';
    protected $fillable = ['product', 'price', 'stok', 
                          'desk', 'image'];
    protected $guarded = ['id'];
}
