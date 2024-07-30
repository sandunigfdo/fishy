<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;


class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('organizations.index',[
            'roles' => Role::all(),
        ]);
    //  Add pagination to increase performance
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
        // dd($request->all());
        // Validate incoming request data
        $roles = Role::all()->modelKeys();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'role' => 'required', Rule::in($roles),
            'o_name' => 'required|string|max:255',

        ]);

        // Create a new User
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->role_id = $validated['role'];
        $user->save();

        if ($validated['role'] != 1) {
            // If the role is user
            // Store organization data in the organizations table
            $organization = new Organization();
            $organization->o_name = $validated['o_name'];
            $organization->o_email = $validated['email'];
            $organization->user_id = $user->id;
            $organization->save();

        }
        return redirect(route('dashboard'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
