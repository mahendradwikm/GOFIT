<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreOrder extends Model
{
    use HasFactory;

    protected $table = 'pre-order';
    protected $fillable =[
        'user_id',
        'venue_id',
        'date',
        'time',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function venue(){
        return $this->belongsTo(Venue::class);
    }
}
