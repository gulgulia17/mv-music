<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Inquiry;
use App\LatestMusic;
use App\Media;
use App\siteData;
use App\SocialMedia;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SocialMedia = SocialMedia::orderBy('id', 'desc')->first();
        $logo = Media::orderBy('id', 'desc')->first();
        $about = About::orderBy('id', 'desc')->first();
        $LatestMusic = LatestMusic::orderBy('id', 'desc')->first();
        $Contact = Contact::orderBy('id', 'desc')->first();
        return view('admin.siteData.index', compact('SocialMedia', 'logo', 'about', 'LatestMusic', 'Contact'));
    }

    public function SocialMedia(Request $request)
    {
        SocialMedia::create($request->validate([
            "facebook" => '',
            "instagram" => '',
            "twitter" => '',
            "linkedin" => '',
            "snapchat" => '',
        ]));
        return back()->with('status', 'Successfully.');
    }

    public function SiteDetails(Request $request)
    {
        (isset($request->logo) & isset($request->for)) ?
            $this->mediaUpdate(Media::create(['path' => $request->logo, 'for'  => $request->for]), 'logo', 'logo', 'path') : null;
        isset($request->short_about) ? About::create(['short_about' => $request->short_about]) : null;
        return back()->with('status', 'Successfully.');
    }

    public function Media(Request $request)
    {
        //
    }

    public function Contact(Request $request)
    {
        Contact::create($request->validate([
            'phonenumber' => 'required|string',
            'email'       => 'required|email',
            'location'    => 'required|string',
        ]));
        return back()->with('status', 'Successfully.');
    }

    public function test(Request $request)
    {
        $counter = null;
        if (isset($request->counter) & !empty($request->counter)) {
            switch ($request->counter) {
                case '1':
                    $counter = 2;
                    return json_encode($counter);
                    break;

                case '2':
                    $counter = 3;
                    return json_encode($counter);
                    break;
                case '3':
                    $counter = 4;
                    return json_encode($counter);
                    break;
                default:
                    return json_encode($counter);
                    break;
            }

            /*
            "counter" => "1"
            "name" => "MV Music"
            "email" => "admin@mvmusic.com"
            "number" => "9856321470
            */
        } else {
            return back()->with('status', 'Something went wrong.');
        }
    }

    public function MediaUpdate($response, $des = null, $fileName, $fieldName)
    {
        $path   = request()->file($fileName);
        $resize = Image::make($path);
        $hash = md5(time());
        $path = "images/{$des}/{$hash}.png";
        $resize->save(public_path($path));
        $url = "/" . $path;
        $response->update([
            $fieldName => $path,
        ]);
    }
}
