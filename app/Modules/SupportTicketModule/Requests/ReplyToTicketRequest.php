<?php
namespace App\Modules\SupportTicketModule\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Exceptions\NotAuthorizedException;
use Input;

class ReplyToTicketRequest extends FormRequest {


	public function rules(){

		return [

            'comment' => 'nullable',
            'ref_id' => 'required',
            'status' => 'required',

		];
	}

}
