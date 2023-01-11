<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment_info';
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'payment_id',
        'payer_id',
        'user_id',
        'payer_email',
        'payment_status',
        'amount',
        'currency',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    
}
