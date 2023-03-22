<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function service()
    {
        return view('site.service');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function testimonial()
    {
        return view('site.testimonial');
    }

    public function project()
    {
        return view('site.project');
    }

    public function appointment()
    {
        return view('site.appointment');
    }

    public function member()
    {
        return view('site.member');
    }
}
