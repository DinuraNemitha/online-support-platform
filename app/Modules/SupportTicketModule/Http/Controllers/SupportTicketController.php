<?php

namespace App\Modules\SupportTicketModule\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\SupportTicketModule\Requests\ReplyToTicketRequest;
use App\Modules\SupportTicketModule\Requests\CreateSupportTicketRequest;
use App\Modules\SupportTicketModule\Repositories\SupportTicketInterface;


class SupportTicketController extends Controller
{

    function __construct(SupportTicketInterface  $SupportTicketInterface)
    {
        $this->SupportTicketInterface = $SupportTicketInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();

            if ($user) {

                $data = $this->SupportTicketInterface->getAll();
                return view("SupportTicketModule::index",compact("data"));

            } else {
                return redirect('login')->with('error','User Not Logged In!.');
            }
    }

     /**
     * Create a  resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

            if ($user) {

                return view("SupportTicketModule::create-ticket");

            } else {
                return redirect('login')->with('error','User Not Logged In!.');
            }
    }

    /**
     * Create a  resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSupportTicketRequest $request)
    {
        $user = Auth::user();

            if ($user) {

                $this->SupportTicketInterface->createData($request);

                return redirect('category/list')->with('success','Category Created Successfully!');

            } else {
                return redirect('login')->with('error','User Not Logged In!.');
            }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function replyToTicket(ReplyToTicketRequest $request)
    {
        $user = Auth::user();

        if ($user) {

            $this->SupportTicketInterface->replyToTicket($request, $user);
            return redirect('ticket/list')->with('success','Successfully Replied!');

        } else {

            $response = array('code' => 0, 'status' => '', 'msg' => 'User Not Logged In!.');
            return redirect('login')->with('error','User Not Logged In!.');
        }


    }

}
