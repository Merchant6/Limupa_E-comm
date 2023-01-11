<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_id',
        'user_id',
        'product_id',
        'name',
        'shipping_address',
        'quantity',
        'sub_total',
        'payment_type',
    ];

    //User Relation
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    

}
