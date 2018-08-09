<?php

namespace Ultron\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Ultron\Contact\Http\Requests\ContactRequest;
use Ultron\Contact\Mail\ContactMailable;
use Ultron\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(ContactRequest $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name, $request->email));
        Contact::create($request->all());
        $status = 'Message send Successfully!';
        return view('contact::send')->with('status', $status);
    }
}
