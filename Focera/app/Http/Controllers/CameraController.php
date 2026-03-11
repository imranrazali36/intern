<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function index()
    {
        // Fetch cameras from the database
        $cameras = \App\Models\Camera::all(); 
        
        // Return the dashboard view with camera data
        return view('dashboard', compact('cameras'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'stream_url' => 'required',
        ]);

        Camera::create($validated);
        return back()->with('success', 'Camera added successfully!');
    }
}
