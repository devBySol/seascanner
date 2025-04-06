<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
   

        $activities = Activity::with('category')->get();
        return view('home', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
        ]);

        Activity::create($request->all());

        return redirect()->route('activities.index')->with('success', 'Activity created!');
    }
}