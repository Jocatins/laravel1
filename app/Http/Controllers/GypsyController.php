<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model
use App\Models\Gypsy;

//When we define controllers they are called actions 
//Controllers register actions or functions that fire when certain routes are visited
class GypsyController extends Controller
{
    //
    public function index()
    {
        //$gypsies =  Gypsy::all();
        // $gypsies = Gypsy::orderBy('name', 'desc')->get();
        $gypsies = Gypsy::where('name', 'Creeks')->get();

        return view('gypsy', ['gypsies' => $gypsies]);
    }
    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
