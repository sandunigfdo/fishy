<?php

namespace App\Http\Controllers;

use App\Services\HandleUserInteraction;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    /**
     * Display landing page.
     */
    public function index(Request $request): View
    {
        $token = $request->query('token');

        // Record that the user clicked the link
        HandleUserInteraction::clicked($token);

        return view('landing.microsoft-login');
    }

    /**
     * Handle form submission.
     */
    public function store(Request $request)
    {
        $email = $request->input('email');
        $url_token = $request->input('url_token');

        $data = [
            'email' => $email,
            'token' => $url_token,
        ];

        $jsonData = json_encode($data);

        return HandleUserInteraction::submitted($jsonData);

    }
}
