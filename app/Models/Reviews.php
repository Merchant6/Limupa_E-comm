<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Apps\Models\Products;
use Apps\Models\User;

class Reviews extends Model
{
    use HasFactory;

    protected $table = "reviews";

    protected $fillable = [
       
        'user_id',
        'product_id',
        'comment',
        
        
    ];

    /**
     * Get the product that owns the review.
     */
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }

    /**
     * Get the user that made the review.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
