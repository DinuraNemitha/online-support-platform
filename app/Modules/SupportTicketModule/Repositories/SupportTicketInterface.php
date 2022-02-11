<?php


namespace App\Modules\SupportTicketModule\Repositories;


interface SupportTicketInterface
{
    public function getAll();
    public function replyToTicket($request, $user);


}
