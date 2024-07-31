<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserDashboardController extends Controller
{
    public function index(): View
    {
        return view('user.userdashboard',[
            'employees' => Employee::all(),
        ]);

    }
}
