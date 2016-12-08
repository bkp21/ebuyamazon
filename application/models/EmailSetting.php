<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class EmailSetting extends Eloquent
{
    protected $fillable = ['settings'];

    protected $primaryKey = 'setting_id';

    public $timestamps = false;
}
