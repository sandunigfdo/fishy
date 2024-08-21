<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CanaryTokenController extends Controller
{
   public function handleWebhook(Request $request)
   {
       Log::info($request->all());
       return "ok";
   }
}
