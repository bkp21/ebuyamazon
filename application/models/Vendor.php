<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Vendor extends Eloquent
{
    protected $table = 'vendor';

    protected $primaryKey = 'vendor_id';

    protected $guarded = ['vendor_id'];

    public function rating()
    {
        return $this->hasMany('App\VendorRating', 'vendor_id', 'vendor_id');
    }
}
