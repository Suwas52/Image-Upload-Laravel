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
        $home = new Home();
        $home->name = $req->name;
        $home->country = $req->country;
        $home->total_games = $req->total_games;
        $home->total_goals = $req->total_goals;

        $home->save();

        return redirect()->route('list');
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

        Home::where('id', '=', $id)->update([
            'name' => $name,
            'country' => $country,
            'total_games' => $total_games,
            'total_goals' => $total_goals,
        ]);

        return redirect('/list')->with('success', 'Updated Successfully');
    }

    public function delete($id){
        Home::where('id', "=", $id)->delete();

        return redirect('/list')->with('success', 'Delete Successfully');
    }
}