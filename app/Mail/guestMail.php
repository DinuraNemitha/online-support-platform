<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GuestMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $data = null;
    public $subject = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$subject)
    {
        $this->data = $data;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        $this->from("support@example.com");
        $this->subject($this->subject);
        return $this->markdown('emails.guest_mail')
            ->with([
                'data' => $this->data,
            ]);
    }
}
