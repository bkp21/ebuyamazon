<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class VendorReport extends Eloquent
{
    protected $primaryKey = 'report_id';

    protected $guarded = ['report_id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Vendor', 'vendor_id', 'vendor_id');
    }
}
