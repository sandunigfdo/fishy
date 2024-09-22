<?php

namespace App\Services;

use App\Models\Result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HandleUserInteraction
{
    /**
     * Tracks if user submitted the form.
     *
     * @param string $data
     * @return string
     */
    public static function submitted(string $data): string
    {
        // Decode the JSON to an associative array
        $data = json_decode($data, true);
        // Access the 'token'
        $token = $data['token'];

       // If the url_token passed, exists in the results table, set the submit_creds to TRUE
       $found = Result::where('url_token', $token)->exists();

       if($found){
           DB::table('results')
              ->where('url_token', $token)
              ->update(['submit_creds' => true]);
       }

       return 'You are phished!';

    }

    /**
     * Track if user clicked the link.
     *
     * @param string $token
     * @return void
     */
    public static function clicked(string $token): void
    {
        $found = Result::query()
            ->where('url_token', $token)
            ->exists();

       if($found){
           DB::table('results')
              ->where('url_token', $token)
              ->update(['click_link' => true]);
       }
    }
}
