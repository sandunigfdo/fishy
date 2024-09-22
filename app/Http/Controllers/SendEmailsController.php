<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailCampaign;
use Symfony\Component\Mailer\Exception\TransportException;


class SendEmailsController extends Controller
{
    public function store()
    {
        $recipient = 'lupwwnsamie@gmail.com';
        try {
             Log::info('Starting to send email');
             Mail::to($recipient)->send(new EmailCampaign());
             Log::info('Email sent to: ' . $recipient);
        } catch (TransportException $e) {
            Log::error($e->getMessage());
        }


         return back()->with('success', 'Test email sent successfully!');



    }
}
