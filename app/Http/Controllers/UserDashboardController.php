<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserDashboardController extends Controller
{
    public function index(): View
    {
        // Get ongoing campaigns
        $ongoing_campaigns = DB::table('campaigns')->where('status', 'In Progress')->get();
        $results_ongoing = [];
        $click_link_count = [];
        $submit_data_count = [];

        foreach ($ongoing_campaigns as $campaign) {
            $campaignId = $campaign->id;
            // Get results of the ongoing campaigns
            $results = DB::table('results')->where('campaign_id', $campaignId)->get();
            // Store the results in the array
            $results_ongoing[$campaignId] = $results;

            // Get the count where click_link is true
            $link_count[$campaignId] = DB::table('results')
                    ->where('campaign_id', $campaignId)
                    ->where('click_link', true)
                    ->count();

            // Get the count where submit_creds is true
            $submit_count[$campaignId] = DB::table('results')
                                        ->where('campaign_id', $campaignId)
                                        ->where('submit_creds', true)
                                        ->count();

            $click_link_count[$campaignId] = $link_count[$campaignId];
            $submit_data_count[$campaignId] = $submit_count[$campaignId];
        }
//        dd($click_link_count);

        return view('user.userdashboard',[
            'ongoing_campaigns' => $ongoing_campaigns,
            'results_ongoing' => $results_ongoing,
            'click_link_count' => $click_link_count,
            'submit_data_count' => $submit_data_count,
        ]);

    }
}
