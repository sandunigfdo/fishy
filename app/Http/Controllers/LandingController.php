<?php

namespace App\Http\Controllers;

use App\Services\HandleUserInteraction;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('landing.microsoft-login');
    }

    public function store(Request $request)
    {
        $email = $request->input('email');
        $url_token = $request->input('url_token');

        $data = [
            'email' => $email,
            'token' => $url_token,
        ];

        $jsonData = json_encode($data);

        $handleEmployeeInput = new HandleUserInteraction;

        $response = $handleEmployeeInput->store($jsonData);

        return $response;


    }
}
