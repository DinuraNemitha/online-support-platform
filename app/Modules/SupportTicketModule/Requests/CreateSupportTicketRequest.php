<?php
namespace App\Modules\SupportTicketModule\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Exceptions\NotAuthorizedException;
use Input;

class CreateSupportTicketRequest extends FormRequest {


	public function rules(){

		return [

            'category' => 'required',
            'status' => 'nullable',

		];
	}

}
