<?php

namespace App\Models;

use App\Models\Venue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facilities extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
    ];

    protected $table = 'facilities';

    public function venues()
    {
        return $this->belongsToMany(Venue::class, 'f_venues', 'facility_id', 'venue_id');
    }
}
