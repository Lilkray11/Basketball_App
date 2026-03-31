<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function player()
    {
        $response = Http::get('https://www.thesportsdb.com/api/v1/json/3/search_all_teams.php', [
            'l' => 'NBA'
        ]);

        if (!$response->successful()) {
            return "API failed: " . $response->status();
        }

        $data = $response->json();

        if (!isset($data['teams'])) {
            return "No data returned from API";
        }

        return view('api.player', [
            'teams' => $data['teams']
        ]);
    }
}