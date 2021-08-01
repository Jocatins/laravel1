<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//When we define controllers they are called actions 
//Controllers register actions or functions that fire when certain routes are visited
class GypsyController extends Controller
{
    //
    public function index()
    {
        $gypsies = [
            ['type' => 'black', 'base' => 'sweet'],
            ['type' => 'blue', 'base' => 'sweet'],
            ['type' => 'yellow', 'base' => 'sweet'],
            ['type' => 'red', 'base' => 'sweet']
        ];

        return view(
            'gypsy',
            [
                'gypsies' => $gypsies,
                'name' => request('name'),
                'age' => request('age')
            ]
        );
    }
    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
