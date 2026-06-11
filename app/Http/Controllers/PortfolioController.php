<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Contact;
use App\Models\Project;

class PortfolioController extends Controller
{
    // Halaman 1
    public function intro()
    {
        $profile = Profile::first();
        return view('portfolio.intro', compact('profile'));
    }

    // Halaman 2
    public function profile()
    {
        $profile = Profile::with('user')->first();
        $skills = Skill::all();
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        $projects = Project::all();

        // 2. Ambil data contacts dari database
        $contacts = Contact::all();

        // 3. Masukkan 'contacts' ke dalam compact() agar terkirim ke view
        return view('portfolio.profile', compact('profile', 'skills', 'experiences', 'projects', 'contacts'));
    }
    // Halaman 3
    public function projects()
    {
        $profile = Profile::first();
        $contacts = Contact::where('is_public', true)->get();
        $projects = Project::orderBy('start_date', 'desc')->get();
        return view('portfolio.project', compact('profile', 'contacts', 'projects'));
    }
}