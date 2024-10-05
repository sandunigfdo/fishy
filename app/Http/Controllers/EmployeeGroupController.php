<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmployeeGroupController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $employee_ids = $request->employee_ids;
        foreach ($employee_ids as $employee_id) {
            $employee = Employee::find($employee_id);
            $employee->group_id = $request->group_id;
            $employee->save();
        }

        return redirect()->route('employees.index')->with('status', 'employee-added-to-group');
    }
}
