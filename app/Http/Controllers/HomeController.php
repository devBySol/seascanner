<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $activities = Activity::with('category')->get();
        // return view('home', compact('activities'));

        $query = Activity::with('category'); 
        $categories = Category::all()->pluck('name', 'id');
        
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%') 
                  ->orWhere('description', 'like', '%' . $request->search . '%');  
        }

        if ($request->has('category') && $request->category != 'All') {
           $categoryId = array_search($request->category, $categories->toArray()); 
           $query->where('category_id', $categoryId);
        }
    
        $activities = $query->get(); 
        $categories = Category::all();
        
        return view('home', compact('activities', 'categories')); 
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