<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    protected $table = 'product';

    protected $primaryKey = 'product_id';

    protected $guarded = ['product_id'];

    public $timestamps = false;
}
