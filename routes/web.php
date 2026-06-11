<?php

use Illuminate\Support\Facades\Route;
// 1. Import semua model yang kamu gunakan di Filament
use App\Models\Profile;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Skill;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/utama', function () {
    // 1. Ambil data dari database
    $profile = Profile::first(); 
    $skills = Skill::all(); 
    $experiences = Experience::all(); // <-- Ambil data experience di sini

    // 2. Kirim SEMUA variabel ke dalam view utama
    return view('utama.utama', compact('profile', 'skills', 'experiences'));
});

// 3. Route Project
Route::get('/projeck', function () {
    $projects = Project::all(); // Ambil semua data project
    
    return view('projeck.projeck', compact('projects'));
});

// 4. Route Contact
Route::get('/contact', function () {
    $experiences = Experience::all(); // Ambil semua data experience
    
    return view('experience.experience', compact('experiences'));
});