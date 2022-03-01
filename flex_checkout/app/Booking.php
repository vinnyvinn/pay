<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{
    protected $table='product_booking';

    protected $connection = 'mysql2';


    public function customer()
    {
        return $this->belongsTo(Customer::class,'user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
