<?php

namespace App\Http\Controllers;

use App\Contact;
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
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list($resultatsParPage)
    {
        if($resultatsParPage == '0') {
            $contacts = Contact::all();
            return $contacts;
        } else {
            return Contact::paginate($resultatsParPage);
        }
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
        $contact = new Contact();
        $contact->prenom = $request->prenom;
        $contact->nom = $request->nom;
        $contact->titre = $request->titre;
        $contact->email_1 = $request->email_1;
        $contact->email_1_type = $request->email_1_type;
        $contact->email_2 = $request->email_2;
        $contact->email_2_type = $request->email_2_type;
        $contact->phone_1 = $request->phone_1;
        $contact->phone_1_type = $request->phone_1_type;
        $contact->phone_2 = $request->phone_2;
        $contact->phone_2_type = $request->phone_2_type;
        $contact->companie_id = $request->companie_id;
        $contact->notes = $request->notes;
        $contact->save();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function latest()
    {
        return Contact::orderBy('id', 'DESC')->first();
        // return Contact::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact, $id)
    {
        return Contact::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
