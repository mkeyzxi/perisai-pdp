<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class KonstruksiController extends Controller
{
    public function dashboard()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();

        return view('konstruksi.dashboard', compact('projects'));
    }
}
