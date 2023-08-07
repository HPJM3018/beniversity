<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Training;
class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function donations()
    {
        return view('donations');
    }

    public function donation_details()
    {
        return view('donation-details');
    }

    public function donate_now()
    {
        return view('donate-now');
    }

    public function events()
    {
        return view('events');
    }

    public function blog()
    {
        $blogs = Blogs::all();
        return view('blog',compact('blogs'));
    }

    public function trainings()
    {
        $training = Training::all();
        return view('trainings', compact('training'));
    }

    public function event_details()
    {
        return view('event-details');
    }

    public function blog_details()
    {
        return view('blog-details');
    }

    public function become_volunteer()
    {
        return view('become-volunteer');
    }

    public function contact()
    {
        return view('contact');
    }

    public function departements()
    {
        return view('departements');
    }

    public function departement_details()
    {
        return view('departement-details');
    }
}
