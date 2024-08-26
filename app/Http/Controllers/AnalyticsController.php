<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\User;
use App\Models\Employee;
use App\Models\Group;
use App\Models\Results;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class AnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($campaign): View
    {
        // Get the campaign record
        $campaign = DB::table('campaigns')->where('id', $campaign)->first();
        // Get the results associated with the campaign
        $results = DB::table('results')->where('campaign_id', $campaign->id)->get();
        // Get the employees of associated with the campaign
        $employees = [];
        $employee_results = [];
        foreach ($results as $result) {
            $employeeId = $result->employee_id;
            $employee = DB::table('employees')->where('id', $employeeId)->first();
            if ($employee) {
                // Store employee details
                $employees[$employeeId] = $employee;
                // Initialize array for employee results if not already set
                if (!isset($employeeResults[$employeeId])) {
                    $employee_results[$employeeId] = [];
                }
                // Store result details for this employee
                $employee_results[$employeeId][] = $result;
            }

        }
//        dd($employee_results);

        return view('analytics.index', [
            'employees' => $employees,
            'campaign' => $campaign,
            'employee_results' => $employee_results,
        ]);
    }
}
