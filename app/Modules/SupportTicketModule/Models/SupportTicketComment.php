<?php

namespace App\Modules\SupportTicketModule\Models;

use Illuminate\Database\Eloquent\Model;



class SupportTicketComment extends Model
{


    protected $table = 'support_ticket_comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'ref_id ', 'support_ticket_ref_id','support_agent_id','comment'
    ];


    protected $dates = [
        'created_at', 'updated_at'
    ];


}
