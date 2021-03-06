<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        return view('site.home');
    }

    public function about() {
        return view('site.about');
    }
    public function experience() {
        return view('site.experience');
    }
    public function projects() {
        return view('site.projects');
    }
    public function contact() {
        return view('site.contact');
    }
}
