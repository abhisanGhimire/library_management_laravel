<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //This is just for test and example of guzzle usage to consume api
    public function index(){
        $client = new Client();
        $request = $client->get('https://nepalcorona.info/api/v1/data/nepal');
        //Request ko body liera response ma store garyo
        $response = $request->getBody();
        //Response lai decode garyo
        $decoded_info=json_decode($response);
        //dd($decoded_info); //To get all info uncomment the line
        //dump and die the number of positive cases
        dd($decoded_info->tested_positive);
        dd();//Lekhey
    }
}
