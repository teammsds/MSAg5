<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Player;
use App\School;
use App\Team;
use App\Foul;
class Foulcontroller extends Controller

{
    public function index()
    {
        //
        $players = Player::lists('p_fname','id');
        return view('referees.fouls', compact('players'));
    }

    public function store(Request $request)
    {
        $foul= new foul($request->all());
        $foul->save();
        return redirect('fouls');
    }

}
