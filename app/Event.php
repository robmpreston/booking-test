<?php

namespace Booking;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;
    
    protected $guarded = [
        'id'
    ];

    public function bookings()
    {
        return $this->hasMany('Booking\Booking');
    }
}
