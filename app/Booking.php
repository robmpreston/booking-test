<?php

namespace Booking;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $timestamps = false;

    protected $guarded = [
        'id',
        'event_id',
        'customer_id'
    ];

    protected $casts = [
        'health_problems' => 'json'
    ];

    public function customer()
    {
        return $this->belongsTo('Booking\Customer');
    }

    public function event()
    {
        return $this->belongsTo('Booking\Event');
    }
}
