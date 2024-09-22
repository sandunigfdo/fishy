<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Result;
use Illuminate\View\View;


class AnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Campaign $campaign): View
    {
        $results = Result::query()
            ->where('campaign_id', $campaign->id)
            ->with('employee.group')
            ->get();

        return view('analytics.index', [
            'campaign' => $campaign,
            'results' => $results,
        ]);
    }
}
