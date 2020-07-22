<?php

namespace App\Http\Controllers;

use App\About;
use App\Media;
use App\Contact;
use App\Gallery;
use App\Inquiry;
use App\Subscriber;
use App\LatestMusic;
use App\SocialMedia;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PagesController extends Controller
{
    public function index()
    {
        $SocialMedia = SocialMedia::orderBy('id', 'desc')->first();
        $logo = Media::orderBy('id', 'desc')->first();
        $about = About::orderBy('id', 'desc')->first();
        $Contact = Contact::orderBy('id', 'desc')->first();
        $LatestMusic = LatestMusic::orderBy('id', 'desc')->limit(3)->get();
        $gallery = Gallery::orderBy('id', 'desc')->limit(9)->get();
        return view('welcome', compact('SocialMedia', 'logo', 'about', 'LatestMusic', 'Contact', 'gallery'));
    }

    public function sevenat11()
    {
        return view('pages.sevenat11');
    }
    public function whatwedo()
    {
        return view('pages.whatwedo');
    }
    public function studiogear()
    {
        return view('pages.studiogear');
    }
    public function mymusic()
    {
        return view('pages.mymusic');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        $about = About::orderBy('id', 'desc')->first();
        $Contact = Contact::orderBy('id', 'desc')->first();
        return view('pages.contact', compact('about', 'Contact'));
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        return view('pages.gallery', compact('gallery'));
    }

    public function musicproduction()
    {
        return view('pages.musicproduction');
    }
    public function audiorecording()
    {
        return view('pages.audiorecording');
    }
    public function mixingmastering()
    {
        return view('pages.mixingmastering');
    }
    public function onlinemixingmastering()
    {
        return view('pages.onlinemixingmastering');
    }
    public function completemusicalbum()
    {
        return view('pages.completemusicalbum');
    }
    public function songwriting()
    {
        return view('pages.songwriting');
    }
    public function dubbingnvoiceovers()
    {
        return view('pages.dubbingnvoiceovers');
    }
    public function backgroundmusic()
    {
        return view('pages.backgroundmusic');
    }
    public function commercialadsnjingles()
    {
        return view('pages.commercialadsnjingles');
    }
    public function digitalmediapromotion()
    {
        return view('pages.digitalmediapromotion');
    }
    public function store()
    {
        return view('pages.store');
    }

    public function subscriber(Request $request)
    {
        Subscriber::create($request->validate([
            'subscriber_email' => 'required|email|unique:subscribers'
        ]));
        return back()->with('status', 'Thankyou.');
    }

    public function Inquires(Request $request)
    {
        Inquiry::create($request->validate([
            'name' => 'required|min:4|string',
            'email' => 'required|email',
            'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
        ]));
        return back()->with('status', 'Thankyou.');
    }
}
