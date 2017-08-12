<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public function getData(){
      
        $client = new Client([
       'base_uri' => 'http://archive-grbj-2.s3-website-us-west-1.amazonaws.com',
        'timeout'  => 5.0,
      ]);
          $response = $client->request('GET', '/');
          $data = $response->getBody();
          //$data = json_decode($data);
          //$data = json_decode($data);
          dd($data);
        
    }
}
