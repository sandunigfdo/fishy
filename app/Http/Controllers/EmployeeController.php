<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('employees.index',[
            'employees' => Employee::all(),
        ]);
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
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        // Create a new employee
        $employee = new Employee();
        $employee->f_name = $validated['f_name'];
        $employee->l_name = $validated['l_name'];
        $employee->email = $validated['email'];
        $employee->position = $validated['position'];
        $employee->department = $validated['department'];
        $employee->user_id = Auth::user()->id;
        $employee->save();

        return redirect()->route('userdashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee): View
    {
        Gate::authorize('update',$employee);

        return view('employees.edit',[
            'employee' => $employee,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee): RedirectResponse
    {
        Gate::authorize('update',$employee);

        $validated = $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        $employee->update($validated);
        return redirect()->route('userdashboard');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee): RedirectResponse
    {
        Gate::authorize('delete',$employee);
        $employee->delete();
        return redirect()->route('userdashboard');
    }
}
