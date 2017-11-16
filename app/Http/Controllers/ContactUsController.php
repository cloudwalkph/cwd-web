<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactUsRequest;
use App\Notifications\RegistrationSuccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  Request  $request
     */
    public function sendEmail(SendContactUsRequest $request)
    {
        $input = $request->all();

        $emails = ['mm@cloudwalkdigital.com'];
        $ccMails = ['bm@cloudwalkdigital.com'];
        $bccMail = ['leo.a@cloudwalkdigital.com', 'nina.c@cloudwalkdigital.com'];

        foreach( $emails as $email) {
            Mail::to($email)
                ->cc($ccMails)
                ->bcc($bccMail)
                ->send(new RegistrationSuccess($input));
        }
    }
}