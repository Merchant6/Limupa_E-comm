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
}
