<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\GoalCategory;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goals = Goal::with('category')->latest()->get();
        return view('goals.index', compact('goals'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua data kategori dari tabel goal_categories
        $categories = GoalCategory::all();

        // Kirimkan variabel $categories ke view goals.create
        return view('goals.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'goal_category_id' => 'required|exists:goal_categories,id',
            'name' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0',
            'target_date' => 'required|date',
        ]);

        Goal::create($request->all());
        return redirect()->route('goals.index')->with('success', 'Goal berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goal $goal)
    {
        $goalCategories = GoalCategory::all();
        return view('goals.edit', compact('goal', 'goalCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Goal $goal)
    {
        $request->validate([
            'goal_category_id' => 'required|exists:goal_categories,id',
            'name' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0',
            'target_date' => 'required|date',
        ]);

        $goal->update($request->all());
        return redirect()->route('goals.index')->with('success', 'Goal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goal $goal)
    {
        $goal->delete();
        return redirect()->route('goals.index')->with('success', 'Goal berhasil dihapus.');
    }
}