<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ISBNController extends Controller
{
    public function index(){
        $title="Homepage";
        return view('isbn',compact(['title']));
    }
    public function store(Request $request){
        $client = new Client();
        $title="Add New Book";
        $request = $client->get('https://www.googleapis.com/books/v1/volumes?q='.$request->isbn);
        $response = $request->getBody();
        $decoded_info=json_decode($response);
        return view('isbn_handler',compact(['decoded_info','title']));
    }
}
