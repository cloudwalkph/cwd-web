<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public $contactUs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->contactUs = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@cloudwalkdigital.com')
            ->view('email.registration')
            ->with([
                'user' => $this->contactUs,
            ]);
    }
}
