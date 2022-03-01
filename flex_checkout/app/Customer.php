<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    protected $table='lp_customers';

    protected $connection = 'mysql2';

}
