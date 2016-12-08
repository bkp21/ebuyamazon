<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class GeneralSettings extends Eloquent
{
    protected $guarded = ['general_settings_id'];

    public $timestamps = false;
}
