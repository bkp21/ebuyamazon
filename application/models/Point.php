<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Point extends Eloquent
{
    protected $guarded = ['id', 'username'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }
}
