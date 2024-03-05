<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Consultation;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        $userCount = User::count();
        $categoryCount = Category::count();
        $teamCount = Team::count();
        $blogPostCount = BlogPost::count();
        $consultationCount = Consultation::count();
        return view('backend.home', compact('userCount', 'categoryCount', 'teamCount', 'blogPostCount', 'consultationCount'));
    }

}
