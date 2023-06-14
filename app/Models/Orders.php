<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable =[
        'order_id',
        'payment_date',
        'date',
        'time',
        'price',
        'venue_id',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function venue(){
        return $this->belongsTo(Venue::class);
    }
}
