<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Group;
use Illuminate\View\View;

class EmployeeManagementController extends Controller
{
    public function index(): View
    {
        return view('user.employee_management', [
            'employees' => Employee::all(),
            'groups' => Group::all(),
        ]);

    }
}
