<?php

namespace App\Http\Controllers;

use App\LatestMusic;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MyMusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LatestMusic = LatestMusic::orderBy('id', 'desc')->get();
        return view('admin.mymusic.index', compact('LatestMusic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mymusic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->MediaUpdate(
            LatestMusic::create($this->validateRequest($request)),
            'posters',
            'musicThumb',
            'musicThumb'
        );
        return back()->with('status', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(LatestMusic $mymusic)
    {
        return view('admin.mymusic.edit', compact('mymusic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LatestMusic $mymusic)
    {
        $this->MediaUpdate(
            $mymusic->update($this->validateRequest($request)),
            'posters',
            'musicThumb',
            'musicThumb'
        );
        return back()->with('status', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LatestMusic $mymusic)
    {
        $mymusic->delete();
        return back()->with('status', 'Success');
    }

    protected function validateRequest($request)
    {
        return $request->validate([
            'title' => 'required',
            'video_url' => 'required',
            'musicThumb' => 'required',
            'video_des' => 'required|min:100|max:300',
        ]);
    }

    protected function MediaUpdate($response, $des = null, $fileName, $fieldName)
    {
        
        $path   = request()->file($fileName);
        $resize = Image::make($path)->resize(1500, 850);
        $hash = md5(time());
        $path = "images/{$des}/{$hash}.{$path->getClientOriginalExtension()}";
        $resize->save(public_path($path),100);
        $url = "/" . $path;
        $response->update([
            $fieldName => $path,
        ]);
    }
}
