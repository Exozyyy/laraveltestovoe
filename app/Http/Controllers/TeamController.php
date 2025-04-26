<?php
namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all(); 
        return view('teams.all', [
            'teams' => $teams,
            'page' => 'list'  
        ]);
    }
    public function create()
{
    $teams = Team::all();
    return view('footbalers.all', [
        'teams' => $teams,
        'page' => 'create'
    ]);
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|in:Россия,США,Италия',
        ]);

        Team::create($validated);

        return redirect()->route('teams.index')->with('success', 'Team added successfully!');
    }

    public function edit($id)
{
    $footbaler = Footbaler::findOrFail($id);
    $teams = Team::all();
    return view('footbalers.all', [
        'footbaler' => $footbaler,
        'teams' => $teams,
        'page' => 'edit'
    ]);
}

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id); 

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|in:Россия,США,Италия',
        ]);

        $team->update($validated);

        return redirect()->route('teams.index')->with('success', 'Team updated successfully!');
    }
}
