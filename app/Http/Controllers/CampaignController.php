<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Employee;
use App\Models\Group;
use App\Models\Result;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('campaign.index', [
            'employees' => Employee::all(),
            'groups' => Group::all(),
            'campaigns' => Campaign::all(),
            'results' => Result::all()
        ]);
    }

    public function getEmployeesByGroup(Request $request)
    {
        $groupId = $request->input('group_id');
        // Get the authenticated user
        $user = Auth::user();
        // Get employees associated with currently authenticated user that belong to the specified group
        $employees = $user->employees()
            ->where('group_id', $groupId)
            ->get();

        return response()->json($employees);
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
    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new campaign
        $campaign = new Campaign();
        $campaign->name = $validated['name'];
        $campaign->created_date = null;
        $campaign->launch_date = null;
        $campaign->status = 'In Progress';
        $campaign->user_id = Auth::user()->id;
        $campaign->save();

        return redirect()->route('campaign.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        // TODO: Detach relevant related records before deleting a campaign
        $campaign->delete();
        return redirect()->route('campaign.index');
    }
}
