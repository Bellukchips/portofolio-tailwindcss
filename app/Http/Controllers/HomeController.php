<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\PoweredBy;
use App\Models\Project;
use App\Models\Skill;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::take(1)->get()->first();
        $social = SocialMedia::all();
        $project = Project::all();
        $powerBy = PoweredBy::all();
        $skill = Skill::all();
        return view('index', compact('about', 'social', 'project', 'powerBy','skill'));
    }
}
