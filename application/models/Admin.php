<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Admin extends Eloquent
{
    protected $table = 'admin';

    protected $primaryKey = 'admin_id';

    protected $guarded = ['admin_id'];
}
