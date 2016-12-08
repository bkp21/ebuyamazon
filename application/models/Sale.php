<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Sale extends Eloquent
{
    protected $table = 'sale';

    protected $primaryKey = 'sale_id';

    protected $guarded = ['sale_id'];

    public $timestamps = false;
}
