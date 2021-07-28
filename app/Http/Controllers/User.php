<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
   
    public  function viewLoad(){

        $data = ['jenny', 'joca', 'fresh','wealthy'];
         return view('user', ['titans' => $data]);
     }
    
}
