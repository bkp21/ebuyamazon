<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class PriceOffer extends Eloquent
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'product_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }
}
