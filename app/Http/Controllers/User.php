<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    public function index($user){
        echo $user;
        echo 'Hello from controller';
    }
}
