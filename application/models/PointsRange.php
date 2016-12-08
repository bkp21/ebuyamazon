<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class PointsRange extends Eloquent
{
    protected $table = 'points_range';

    protected $guarded = ['id'];

    public $timestamps = false;
}
