<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index()
    {
        // Ambil semua goals milik user
        return view("goals.index");
    }
}
