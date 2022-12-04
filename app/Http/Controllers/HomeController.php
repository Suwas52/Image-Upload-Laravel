<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Home;

class HomeController extends Controller
{
    public function index(){
        return view('dashboard');
    }


    public function list(){
        return view('list',['homes'=> Home::all()]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $req){
        // validating the form
        $req->validate([
            'name' => 'required',
            'country' => 'required',
            'total_games' => 'required',
            'total_goals' => 'required',
            'image' => 'required',
        ]);

        $name = $req->name;
        $country = $req->country;
        $total_games = $req->total_games;
        $total_goals = $req->total_goals;
        $image = $req->file('image')->getClientOriginalName();

        // move uploaded file here
        $req->image->move(public_path('images'), $image);

        $player = new Home();
        $player->name = $name;
        $player->country = $country;
        $player->total_games = $total_games;
        $player->total_goals = $total_goals;
        $player->image = $image;

        $player->save();

        return redirect('/')->with('success', 'Player added successfully');
    }

    public function edit($id){
        $homes = Home::where('id', "=", $id)->first();
        return view('/edit',compact('homes'));
    }

    public function update(Request $req){
        // validating the form
        $req->validate([
            'name' => 'required',
            'country' => 'required',
            'total_games' => 'required',
            'total_goals' => 'required',
        ]);

        // dd($request->all());

        $id = $req->id;
        $name = $req->name;
        $country = $req->country;
        $total_games = $req->total_games;
        $total_goals = $req->total_goals;
        $image = $req->file('image')->getClientOriginalName();


        // move uploaded file here

        $req->image->move(public_path('images'), $image);

        Home::where('id', '=', $id)->update([
            'name' => $name,
            'country' => $country,
            'total_games' => $total_games,
            'total_goals' => $total_goals,
            'image' => $image
        ]);

        return redirect('/')->with('success', 'Updated Successfully');
    }

    public function delete($id){
        Home::where('id', "=", $id)->delete();

        return redirect('/')->with('success', 'Delete Successfully');
    }
}