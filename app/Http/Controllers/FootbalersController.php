<?php

namespace App\Http\Controllers;

use App\Models\Footbaler;
use App\Models\Team;
use Illuminate\Http\Request;

class FootbalersController extends Controller
{

    public function index()
    {
        $footbalers = Footbaler::with('team')->get(); 
        return view('footbalers.all', [
            'footbalers' => $footbalers,
            'page' => 'list',  
        ]);
    }

    public function create()
    {
        $teams = Team::all(); 
        return view('footbalers.all', [
            'teams' => $teams,
            'page' => 'create',  
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|in:Мужской,Женский',
            'birth_date' => 'required|date',
            'country' => 'required|string|in:Россия,США,Италия',
        ]);

        if ($request->has('new_team') && !empty($request->new_team)) {
            $existingTeam = Team::where('name', $request->new_team)
                                ->where('country', $request->country)
                                ->first();

            if ($existingTeam) {
                return redirect()->route('footbalers.create')->with('error', 'Team already exists!');
            }

            $team = Team::create([
                'name' => $request->new_team,
                'country' => $request->country,
            ]);
            $validated['team_id'] = $team->id;
        } else {
            $validated['team_id'] = $request->team_id;
        }

        Footbaler::create($validated);

        return redirect()->route('footbalers.index')->with('success', 'Footballer added successfully!');
    }


    public function edit($id)
    {
        $footbaler = Footbaler::findOrFail($id); 
        $teams = Team::all(); 
        return view('footbalers.all', [
            'footbaler' => $footbaler,
            'teams' => $teams,
            'page' => 'edit',  
        ]);
    }

    public function update(Request $request, $id)
    {
        $footbaler = Footbaler::findOrFail($id); 

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|in:Мужской,Женский',
            'birth_date' => 'required|date',
            'country' => 'required|string|in:Россия,США,Италия',
        ]);

        if ($request->has('new_team') && !empty($request->new_team)) {
            $existingTeam = Team::where('name', $request->new_team)
                                ->where('country', $request->country)
                                ->first();

            if ($existingTeam) {
                return redirect()->route('footbalers.edit', $id)->with('error', 'Team already exists!');
            }

            $team = Team::create([
                'name' => $request->new_team,
                'country' => $request->country,
            ]);
            $validated['team_id'] = $team->id;
        } else {
            $validated['team_id'] = $request->team_id;
        }

        $footbaler->update($validated);

        return redirect()->route('footbalers.index')->with('success', 'Footballer updated successfully!');
    }
}
