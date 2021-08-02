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
        $gypsies =  Gypsy::all();


        return view('gypsies.index', ['gypsies' => $gypsies]);
    }
    public function show($id)
    {
        $gypsy = Gypsy::findOrFail($id);



        return view('gypsies.show', ['gypsy' => $gypsy]);
    }
    public function create()
    {
        return view('gypsies.create');
    }
    public function store()
    {
        $gypsy = new Gypsy();
        $gypsy->name = request('name');
        $gypsy->type = request('type');
        $gypsy->base = request('base');

        $gypsy->toppings = request('toppings');

        $gypsy->save();
        return redirect('/')->with('msg', 'Thanks for your patronage');
    }
    public function destroy($id)
    {
        $gypsy = Gypsy::findOrFail($id);
        $gypsy->delete();

        return redirect('/gypsy');
    }
}
