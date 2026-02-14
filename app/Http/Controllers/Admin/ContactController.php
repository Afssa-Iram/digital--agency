<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('admin.contacts.index', compact('messages'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'Message deleted');
    }
}
