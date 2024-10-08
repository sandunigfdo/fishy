<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campaignId = $request->input('campaign');
        $groupId = $request->input('groups');
        $employees = Employee::where('group_id', $groupId)->get();

        if (config('app.env') === 'local') {
            $base_url = 'http://localhost:9090/landing?token=';
        } else {
            $base_url = 'https://fishy.ncsg.co.nz/landing?token=';
        }


        foreach ($employees as $employee) {
            $url_token = $this->generateToken($campaignId, $employee->id);
            $email_url = $this->generateEmailUrl($base_url, $url_token);

            DB::table('results')->insert([
               'campaign_id' => $campaignId,
               'employee_id' => $employee->id,
               'url_token' => $url_token,
               'email_url' => $email_url,
               'canary_url' => null,
               'canary_id' => null,
            ]);
        }
        return redirect()->route('campaign.index')->with('status', 'group-added-to-campaign');

    }

    public function generateToken(int $campaignId, int $employeeId)
    {
        do {
            $url_token = Str::random(32); //Generate the random token

            $existingToken = DB::table('results')
                            ->where('campaign_id', $campaignId)
                            ->where('employee_id', $employeeId)
                            ->where('url_token', $url_token)
                            ->exists();

        } while($existingToken); // Determine if any records exist that match query's constraints

        return $url_token;
    }

    public function generateEmailUrl(string $base_url, string $url_token)
    {
        // Construct the url send in the email
        $email_url = $base_url . $url_token;

        return $email_url;
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $results)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $results)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Result $results)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $results)
    {
        //
    }
}
