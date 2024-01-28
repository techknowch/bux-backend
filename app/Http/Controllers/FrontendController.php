<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view("frontend.index");
    }
    public function capabilities()
    {
        return view("frontend.capabilities");
    }
    public function about()
    {
        return view("frontend.about");
    }

    public function services()
    {
        return view("frontend.services");
    }
    public function contact()
    {
        return view("frontend.contact");
    }
    public function resourcing()
    {
        return view("frontend.resourcing");
    }
    public function ai()
    {
        return view("frontend.ai");
    }
    public function consultancy()
    {
        return view("frontend.consultancy");
    }
    public function cybersecurity()
    {
        return view("frontend.cybersecurity");
    }
}
