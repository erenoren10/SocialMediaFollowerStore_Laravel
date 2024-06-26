<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = "cart_id";

    protected $fillable = [
        'cart_id',
        'user_id',
        'session_id',
        'code',        
    ];

    public function details()
    {
        return $this->hasMany(CartDetails::class, 'cart_id');
    }
    

}
