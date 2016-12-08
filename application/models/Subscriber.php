<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Subscriber extends Eloquent
{
    protected $table = 'subscribe';

    protected $primaryKey = 'subscribe_id';
}
