<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $req){
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->number = $req->input('number');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact')->with('success', 'You have successfully registered!');
    }

    public function allData(){
      $contact = new Contact;
      //return view('messages', ['data' => Contact::all()]);
      return view('messageses', ['data' => $contact->all()]);
    }

    public function showOneMessage($id){
      $contact = new Contact;
      return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id){
      $contact = new Contact;
      return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, Request $req){
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->number = $req->input('number');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'User updated!');
    }

    public function deleteMessage($id){
      Contact::find($id)->delete();
      return redirect()->route('contact-data')->with('success', 'User deleted!');
    }


}
