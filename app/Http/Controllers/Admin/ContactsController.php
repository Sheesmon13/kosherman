<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get(); // Fetch contacts ordered by creation date

        return view('admin.contact.index', compact('contacts'));
    }
    public function delete($id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->delete();
        return redirect()->route('admin.contact.index')->with('success', 'Contact deleted successfully!');
    }

}