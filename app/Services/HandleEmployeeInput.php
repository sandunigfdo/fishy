<?php

namespace App\Services;

use App\Models\Result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HandleEmployeeInput
{
        public function store(string $data)
        {
//            dd($data);

            // Decode the JSON to an associative array
            $data = json_decode($data, true);
            // Access the 'token'
            $token = $data['token'];

           // If the url_token passed, exists in the results table, set the submit_creds to TRUE
           $found = Result::where('url_token', $token)->exists();

           if($found == true){
               DB::table('results')
                  ->where('url_token', $token)
                  ->update(['submit_creds' => true]);
           }

           return redirect()->route('campaign.index');

        }
}
