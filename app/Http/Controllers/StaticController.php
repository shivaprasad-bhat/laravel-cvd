<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        return view('static.index');
    }

    public function selfCare()
    {
        return view('static.selfcare');
    }

    public function diet()
    {
        return view('static.diets');
    }

    public function lifeStyle()
    {
        return view('static.lifestyle');
    }

    public function contactUs()
    {
        return view('static.contact');
    }
}
