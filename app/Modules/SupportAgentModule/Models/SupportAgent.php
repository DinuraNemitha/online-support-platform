<?php

namespace App\Modules\SupportAgentModule\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class SupportAgent extends Authenticatable
{

    const STATUS_ACTIVE = 1;
    const STATUS_DEACTIVE = 0;

    protected $table = 'support_agents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'status', 'password', 'created_at', 'updated_at'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];


}
