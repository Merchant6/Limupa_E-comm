<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Products extends Model implements Authenticatable
{
    use HasFactory;

    use HasFactory;
    use AuthenticableTrait;


    
    protected $table = 'products';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
       
        'name',
        's_description',
        'l_description',
        'image_src', 
        'category',
        'quantity',
        'price',
        
    ];

    /**
     * Get the reviews of the product.
     */
    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'product_id', 'id');
    }

    /**
     * Get the user that added the product.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
