<?php

namespace App\Http\Controllers;

use App\Models\Footbaler;
use App\Models\Team;
use Illuminate\Http\Request;

class FootbalersController extends Controller
{
    // Метод для отображения страницы с формой для добавления футболиста
    public function create()
    {
        $teams = Team::all();
        return view('footbalers.add', compact('teams'));
    }

    // Метод для сохранения нового футболиста
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
            $team = Team::create([
                'name' => $request->new_team,
                'country' => $request->country,
            ]);
            $validated['team_id'] = $team->id;
        } else {
            $validated['team_id'] = $request->team_id;
        }

        Footbaler::create($validated);

        return redirect()->route('footbalers.create')->with('success', 'Footballer added successfully!');
    }

    // Метод для отображения списка всех футболистов
    public function index()
    {
        $footbalers = Footbaler::with('team')->get();
        return view('footbalers.index', compact('footbalers'));
    }

    // Метод для отображения формы редактирования футболиста
    public function edit($id)
    {
        $footbaler = Footbaler::findOrFail($id);
        $teams = Team::all();
        return view('footbalers.edit', compact('footbaler', 'teams'));
    }

    // Метод для обновления данных футболиста
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
            $team = Team::create([
                'name' => $request->new_team,
                'country' => $request->country,
            ]);
            $validated['team_id'] = $team->id;
        } else {
            $validated['team_id'] = $request->team_id;
        }

        // Обновляем данные футболиста
        $footbaler->update($validated);

        return redirect()->route('footbalers.index')->with('success', 'Footballer updated successfully!');
    }
}
