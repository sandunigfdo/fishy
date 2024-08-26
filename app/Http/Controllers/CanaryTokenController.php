<?php

namespace App\Http\Controllers;

use App\Models\Results;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CanaryTokenController extends Controller
{
   public function handleWebhook(Request $request)
   {
       Log::info($request->input('token'));
       $token = $request->input('token');
       // If the request's token exists in the results table, set the click link to TRUE
       $found = Results::where('canary_id', $token)->exists();

       if($found !== 0){
           DB::table('results')
              ->where('canary_id', $token)
              ->update(['click_link' => true]);
       }

       return "ok";

   }
}
