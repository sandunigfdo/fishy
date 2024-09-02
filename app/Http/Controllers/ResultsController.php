<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Results;
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
//        dd($request->all());
        $campaignId = $request->input('campaign');
        $groupId = $request->input('groups');
        $employees = Employee::where('group_id', $groupId)->get();

        $base_url = 'http://localhost:9090/landing?token=';

        foreach ($employees as $employee) {
            $url_token = $this->generateToken($campaignId, $employee->id);
            $email_url = $this->generateEmailUrl($base_url, $url_token);

            // Construct the canary_url input name dynamically
            $canaryInputName = 'canary-' . $employee->id;

            // Access the canary_url for the current employee
            $canary_url = $request->input($canaryInputName);

            // Extract the canary_tokenId from the canary_url
            $passedUrl = parse_url($canary_url);
            // Extract the path
            $path = $passedUrl['path'];
            // Split the path & get the ID
            $pathSegments = explode('/', trim($path, '/'));
            foreach ($pathSegments as $segment) {
                if (preg_match('/^[a-zA-Z0-9]{20,}$/', $segment)) {
                    $token_id = $segment;
                    break;
                }
            }

            DB::table('results')->insert([
               'campaign_id' => $campaignId,
               'employee_id' => $employee->id,
               'url_token' => $url_token,
               'email_url' => $email_url,
               'canary_url' => $canary_url,
               'canary_id' => $token_id,

            ]);
        }
        return redirect()->route('campaign.index');

    }

    public function generateToken(int $campaignId, int $employeeId){
        do {
            $url_token = Str::random(32); //Generate the random token

            $existingToken = DB::table('results')
                            ->where('campaign_id', $campaignId)
                            ->where('employee_id', $employeeId)
                            ->where('url_token', $url_token)
                            ->exists();

        }while($existingToken); // Determine if any records exist that match query's constraints

        return $url_token;
    }

    public function generateEmailUrl(string $base_url, string $url_token){
        // Construct the url send in the email
        $email_url = $base_url . $url_token;

        return $email_url;
    }

    /**
     * Display the specified resource.
     */
    public function show(Results $results)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Results $results)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Results $results)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Results $results)
    {
        //
    }
}
