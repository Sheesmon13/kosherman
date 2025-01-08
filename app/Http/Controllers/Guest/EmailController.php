<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class EmailController extends Controller
{
    use \Illuminate\Foundation\Validation\ValidatesRequests;
    public function sendContactMail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:60',
            'email' => 'required|email',
            'topic' => 'required|max:20',
            'message' => 'required|min:5|max:255',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'topic' => $request->topic,
            'message' => $request->message,
        ]);

        $adminMail='roby@koshermanlegal.com';
        $response = Mail::to($adminMail)->send(new WelcomeEmail($request->all()));

        if($response)
        {
            return back()->with('success', 'Thank you for contacting us.');
        }
        return back()->with('error', 'Unable to submit contact form. Please try again.');
        
    }
}
