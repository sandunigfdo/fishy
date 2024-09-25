<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailCampaign;
use Symfony\Component\Mailer\Exception\TransportException;


class SendEmailsController extends Controller
{
    public function store(Request $request)
    {
        $campaignId = $request->input('campaign_id');

        // Get users who belong to this campaign
        $results = Result::query()
            ->where('campaign_id', $campaignId)
            ->with('employee')
            ->get();

        foreach ($results as $result) {
            try {
                Log::info('Sending email', ['email' => $result->employee->email]);

                Mail::to($result->employee->email)->send(new EmailCampaign(
                    $result->employee->f_name,
                    $result->email_url
                ));

                // Set email sent status
                $result->email_sent = true;
                $result->save();

                Log::info('Email sent');

            } catch (TransportException $e) {
                Log::error('Sending email failed', ['exception' => $e]);
            }
        }

        return back()->with('success', 'Email sent successfully!');



    }
}
