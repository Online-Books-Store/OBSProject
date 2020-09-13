<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContentRequest;
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
        $contacts = Contact::orderBy('id','desc')->get();
        return view('Backend.admin.contact',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }


    public function store(ContentRequest $request)
    {
        Contact::create($request->all());
        return redirect('/')->with('success','Message Send is Success!');
    }


    public function show($id)
    {
        //
    }


    public function edit(Contact $contact)
    {
        //
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }


    public function destroy(Contact $contact)
    {
        //
    }
}
