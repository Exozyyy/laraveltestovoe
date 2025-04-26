<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|in:Россия,США,Италия',
        ]);

        $team = Team::create($validated);

        return redirect()->route('teams.index')->with('success', 'Team added successfully!');
    }
}
