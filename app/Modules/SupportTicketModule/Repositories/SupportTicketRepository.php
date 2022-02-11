<?php

namespace App\Modules\SupportTicketModule\Repositories;

use App\Mail\guestMail;
use App\Modules\SupportTicketModule\Models\SupportTicket;
use App\Modules\SupportTicketModule\Models\SupportTicketComment;


class SupportTicketRepository implements SupportTicketInterface
{


    public function getAll()
    {
        $query = SupportTicket::select('ref_id','customer_email','customer_name', 'status', 'description', 'customer_contact_no', 'opened_by', 'created_at');
        return $query->get();
    }



    public function replyToTicket($data, $user)
    {

        $supportTicketComment = SupportTicketComment::create([

                'support_ticket_ref_id'=> $data->ref_id,
                'support_agent_id' => $user->id,
                'comment' => $data->comment
            ]);

        if($supportTicketComment){

            $supportTicket = SupportTicket::where('ref_id',$data->ref_id)

            ->update([

                'status'=> ($data->status==0) ? SupportTicket::STATUS_CLOSED : SupportTicket::STATUS_INPROGRESS,
            ]);

        }

        if($data->status==SupportTicket::STATUS_CLOSED){

            $ticketData = SupportTicket::where('ref_id',$data->ref_id)->first();
            $name = $ticketData->customer_name;
            $email = $ticketData->customer_email;
            $comment = $data->comment;
            $refId = $data->ref_id;


            $emailData=[
                'name' =>  $name,
                'msg' => 'Reply - ' .$comment,
                'description' => 'Problem - '.$ticketData->description,
            ];
            $subject = $refId. ' '. 'status';
            $mails = \Mail::to($email)->send(new guestMail($emailData, $subject));
        }


        return $supportTicket;

    }





}
