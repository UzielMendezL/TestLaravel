<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['contactsIndex'] = Contacts ::paginate(10);
        return view('Users.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$infomationContact = request() -> all();
        $infomationContact= request() -> except('_token'); 
        
        Contacts ::insert($infomationContact);
        return response() -> json($infomationContact);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contactEdit = Contacts::findOrFail($id);
        return view('Users.Edit',compact('contactEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $editInfomationContact= request() -> except(['_token','_method']);
        Contacts::where('id', '=', $id) ->update($editInfomationContact);

        $contactEdit = Contacts::findOrFail($id);
        return view('Users.Edit',compact('contactEdit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        Contacts:: destroy($id);
        return redirect('contacts');

    }
}
