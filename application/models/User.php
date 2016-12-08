<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $table = 'user';

    protected $primaryKey = 'user_id';

    protected $guarded = ['user_id'];
}
