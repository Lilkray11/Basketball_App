<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    public function create()
    {
        $teams = Team::all();
        return view('players.create', compact('teams'));
    }

    public function store(Request $request)
    {
        Player::create($request->all());
        return redirect('/teams');
    }

    public function edit($id)
{
    $player = Player::findOrFail($id);
    $teams = Team::all();
    return view('players.edit', compact('player', 'teams'));
}

public function update(Request $request, $id)
{
    $player = Player::findOrFail($id);
    $player->update($request->all());
    return redirect('/teams');
}

public function destroy($id)
{
    $player = Player::findOrFail($id);
    $player->delete();
    return redirect('/teams');
}
}

