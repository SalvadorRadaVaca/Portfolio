<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $projects = Project::paginate();

        return view('welcome', compact('projects'))
            ->with('i', (request()->input('page', 1) - 1) * $projects->perPage());
    }
}
