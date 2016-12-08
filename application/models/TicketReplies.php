<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model as Eloquent;

class TicketReplies extends Eloquent
{
    protected $primaryKey = 'reply_id';

    protected $guarded = ['reply_id', 'created_at', 'updated_at'];

    public function ticket()
    {
        return $this->belongsTo('App\Ticket', 'ticket_id', 'ticket_id');
    }

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

    public function getCreatedAtAttribute($value)
    {
        return $this->getDate($value);
    }

    public function getUpdatedAtAttribute($value)
    {
        return $this->getDate($value);
    }

    protected function getDate($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
