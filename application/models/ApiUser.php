<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class ApiUser extends Eloquent
{
    protected $fillable = ['vendor_id', 'status'];

    public function vendor()
    {
        return $this->belongsTo('App\Vendor', 'vendor_id', 'vendor_id');
    }
}
