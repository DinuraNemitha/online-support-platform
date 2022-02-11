<?php

namespace App\Modules\SupportTicketModule\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class SupportTicket extends Model
{

    const STATUS_INITIAL = 1;
    const STATUS_INPROGRESS = 2;
    const  STATUS_CLOSED = 0;


    protected $table = 'support_tickets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'ref_id ', 'customer_name','customer_email','description','customer_contact_no','opened_by','status'
    ];


    protected $dates = [
        'created_at', 'updated_at'
    ];


}
