<?php

namespace App\Http\Controllers;

use App\Models\GoalCategory;
use Illuminate\Http\Request;

class GoalCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goalCategories = GoalCategory::all();
        return view('goal-categories.index', compact('goalCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('goal-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        GoalCategory::create($request->all());
        return redirect()->route('goal-categories.index')->with('success', 'Kategori tujuan berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GoalCategory $goalCategory)
    {
        return view('goal-categories.edit', compact('goalCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GoalCategory $goalCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $goalCategory->update($request->all());
        return redirect()->route('goal-categories.index')->with('success', 'Kategori tujuan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GoalCategory $goalCategory)
    {
        $goalCategory->delete();
        return redirect()->route('goal-categories.index')->with('success', 'Kategori tujuan berhasil dihapus.');
    }
}