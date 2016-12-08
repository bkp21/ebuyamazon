<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class BusinessSetting extends Eloquent
{
    protected $guarded = ['business_settings_id'];

    protected $primaryKey = 'business_settings_id';

    public $timestamps = false;
}
