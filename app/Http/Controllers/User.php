<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
   
    public  function viewData(Request $request){
        $request->validate([
            'username'=>'required | max: 12',
            'password'=>'required | min: 6'
        ]);
        return $request->input();
        
     }
    
}
