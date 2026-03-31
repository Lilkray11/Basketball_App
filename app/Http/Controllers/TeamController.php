<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Http;

class TeamController extends Controller
{
    public function index()
    {
        // Database teams
        $teams = Team::with('players')->get();

        // API call
        $response = Http::get('https://www.thesportsdb.com/api/v1/json/3/search_all_teams.php', [
            'l' => 'NBA'
        ]);

        $apiTeams = [];

        if ($response->successful()) {
            $data = $response->json();
            $apiTeams = $data['teams'] ?? [];
        }

        // Return view
        return view('teams.index', [
            'teams' => $teams,
            'apiTeams' => $apiTeams
        ]);
    }
}