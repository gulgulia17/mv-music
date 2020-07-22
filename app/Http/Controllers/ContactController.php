<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Inquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contact::create($request->validate([
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
            'email'       => 'required|email',
            'location'    => 'required|string',
        ]));
        return back()->with('status', 'Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->validate([
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
            'email'       => 'required|email',
            'location'    => 'required|string',
        ]));
        return back()->with('status', 'Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inquiry()
    {
        $Inquiry = Inquiry::orderBy('id', 'desc')->get();
        return view('admin.contact.inquiry', compact('Inquiry'));
    }
}
