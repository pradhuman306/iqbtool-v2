<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MailController extends Controller
{
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
