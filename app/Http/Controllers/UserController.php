<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.index',[
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
        // Validate incoming request data
        $roles = Role::all()->modelKeys();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'role' => 'required', Rule::in($roles),
            'organization' => 'required|string|max:255',

        ]);

        // Create a new User
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->role_id = $validated['role'];
        $user->organization = $validated['organization'];
        $user->save();

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
    public function edit(User $user): View
    {
//        Gate::authorize('update', $user);
        return view('admin.edit',[
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
//        Gate::authorize('update', $user);
        $roles = Role::all()->modelKeys();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'role' => 'required', Rule::in($roles),

        ]);

        // Update user information
        $user->name = $validated['name'];
        $user->organization = $validated['organization'];
        $user->email = $validated['email'];
        $user->role_id = $validated['role'];
        $user->save();

        return redirect(route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
//        Gate::authorize('delete', $user);
        $user->delete();
        return redirect(route('dashboard'));
    }
}
