<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ConfirmMobileController extends Controller
{
    public function sendcode(Request $request)
    {

        $mobile=auth()->user()->mobile;


        $client = new Client();
        $url    = 'https://api.ubill.dev/v1/sms/send';
        $params = [
            'query' => [
                'key'      => env('UBILL_KEY'),
                'brandID'  => 2,
                'numbers'  => $mobile,
                'text'     => 'shop.ews.ge კოდი: '.$request->code,
                'stopList' => false,
            ],
        ];


        try {
            $response = $client->get($url, $params);
            echo $response->getBody();
        } catch (RequestException $e) {
            // Handle request exceptions, e.g., connection errors, HTTP errors, etc.
            echo 'Error: '.$e->getMessage();
        }

    }
}
