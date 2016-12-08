<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserRating extends Eloquent
{
    protected $table = 'user_total_point_tbl';

    protected $guarded = ['tid'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }
}
