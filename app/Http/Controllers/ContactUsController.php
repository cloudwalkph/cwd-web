<?php

namespace App\Http\Controllers;

use App\Notifications\RegistrationSuccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  Request  $request
     */
    public function sendEmail(Request $request)
    {
        Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|recaptcha',
        ])->validate();

        $input = $request->all();

        $emails = ['bm@cloudwalkdigital.com', 'mm@cloudwalkdigital.com'];
        $bccMail = ['leo.a@cloudwalkdigital.com', 'nina.c@cloudwalkdigital.com'];

        foreach( $emails as $email) {
            Mail::to($email)
                ->bcc($bccMail)
                ->send(new RegistrationSuccess($input));
        }
    }
}