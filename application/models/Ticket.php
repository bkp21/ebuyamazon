<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Ticket extends Eloquent
{
    protected $primaryKey = 'ticket_id';

    protected $guarded = ['ticket_id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Vendor', 'vendor_id', 'vendor_id');
    }

    public function admin()
    {
        return $this->belongsTo('App\Admin', 'admin_id', 'admin_id');
    }

    public function replies()
    {
        return $this->hasMany('App\TicketReplies', 'ticket_id', 'ticket_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'product_id');
    }
}
