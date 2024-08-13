<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmployeeGroupController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
//        dd($request->group_id);
//        $validated = $request->validate([
//            'group_id' => 'required',
//            'employee_id' => 'required',
//        ]);

        $employee_ids = $request->employee_ids;
        foreach ($employee_ids as $employee_id) {
            $employee = Employee::find($employee_id);
            $employee->group_id = $request->group_id;
            $employee->save();
        }

        return redirect('/employee_management')->with('success', 'Group created!');
    }
}
