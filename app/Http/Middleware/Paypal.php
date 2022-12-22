<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Paypal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ch = curl_init();
        $client_id = env('Client_Id');
        $client_secret = env('Client_Secret');
        $base_url = env('Base_Url');

        curl_setopt($ch, CURLOPT_URL, $base_url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_USERPWD, $client_id.":".$client_secret);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

        $result = curl_exec($ch);

        if(empty($result))die('Error: No response');
        else
        {
            $json = json_decode($result);
            print_r($json);
        }

        curl_close($ch);


        // return $next($request);
    }
}
