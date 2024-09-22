<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    /*
    ** welcome
    */
    public function welcome()
    {
        return view('welcome');
    }
    /*
    ** blog
    */
    public function blog($blogId)
    {
        return view('blog',  compact('blogId'));
    }
    /*
    ** submitContactForm
    */
    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'msg' => 'required|string|min:10',
        ]);

        // Prepare data for the email
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'user_message' => $request->input('msg'),
        ];

        // Send the email
        Mail::send('email-template', $data, function ($message) use ($data) {
            $message->to('contact@mdjunaid.com')
                ->subject('New Contact Form Submission')
                ->replyTo($data['email']);
        });

        // Return a success message
        return back()->with('success', 'Thank you for contacting us!');
    }






}
