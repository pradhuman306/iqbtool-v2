<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MailController extends Controller
{
     // Handle form submission
    public function submitForm(Request $request)
    {
     $request->validate([
            'full_name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ], [
            'required' => 'The :attribute field is required.',
        ], [
            'full_name'    => 'Name',
            'email'   => 'Email Address',
            'message' => 'Message',
        ]);

        // Collect data
        $full_name    = $request->input('full_name');
        $email   = $request->input('email');
        $subject = 'Contact Form Submission'; // You can customize this
        $message = $request->input('message');

        // Prepare email content
        $to      = 'nextigehosting@gmail.com'; // Change to your desired recipient
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $body = "You have received a new message from your website contact form.\n\n";
        $body .= "Full Name: $full_name\n";
        $body .= "Email: $email\n";
        // $body .= "Subject: $subject\n";
        $body .= "Message: $message\n";

           try {
            // Attempt to send email using mail()
            if (!mail($to, $subject, $body, $headers)) {
                throw new \Exception('mail() failed.');
            }
            return back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send message. Please try again later.');
        }
    }

    public function sendEmail(Request $request)
    {
        
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email',
            'message'   => 'required|string',
        ]);

        // Load existing messages
        $filePath = resource_path('data/messages.json');
        $messages = File::exists($filePath)
            ? json_decode(File::get($filePath), true)
            : [];

        // Append new message
        $messages[] = [
            'full_name' => $validated['full_name'],
            'email'     => $validated['email'],
            'message'   => $validated['message'],
            'submitted_at' => now()->toDateTimeString(),
        ];

       
        File::put($filePath, json_encode($messages, JSON_PRETTY_PRINT));

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
