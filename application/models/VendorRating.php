<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class VendorRating extends Eloquent
{
    const CREATED_AT = 'time_added';

    const UPDATED_AT = 'time_modified';

    protected $primaryKey = 'rating_id';
    
    protected $guarded = ['rating_id', 'time_added', 'time_modified'];

    public function vendor()
    {
        return $this->belongsTo('App\Vendor', 'vendor_id', 'vendor_id');
    }
}
