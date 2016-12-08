<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class RmaInfo extends Eloquent
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function sale()
    {
        return $this->belongsTo('App\Sale', 'sale_id', 'sale_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'product_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Vendor', 'vendor_id', 'vendor_id');
    }
}
