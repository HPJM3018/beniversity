<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Event;
use App\Models\Donation;
use App\Models\Training;
use App\Models\Departement;
use Illuminate\Http\Request;

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
        return view('donations', compact('donations'));
    }

    public function donation_details()
    {
        $donations = Donation::all();
        return view('donation-details', compact('donations'));
    }

    public function donate_now()
    {
        $donations = Donation::all();
        return view('donate-now', compact('donations'));
    }

    public function events()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }

    public function blog()
    {
        $blogs = Blogs::all();
        return view('blog',compact('blogs'));
    }

    public function trainings()
    {
        $trainings = Training::all();
        return view('trainings', compact('trainings'));
    }

    public function event_details(Event $event)
    {
        return view('event-details', compact('event'));
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
        $departements = Departement::all();
        return view('departements', compact('departements'));
    }

    public function departement_details(Departement $departement)
    {
        return view('departement-details', compact('departement'));
    }
}
