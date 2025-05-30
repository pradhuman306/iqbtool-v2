<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard(Request $request)
    {

        $locale = session('locale', 'nl');

        $filePath = resource_path("lang/{$locale}.json");

        // Load existing data
        $jsonContent = file_get_contents($filePath);
        $dataArray = json_decode($jsonContent, true);
        $page = $request->query('page', 'home');

        if (view()->exists("admin.{$page}")) {
            return view("admin.{$page}", ['data' => $dataArray]);
        } else {
            return view('admin.home', ['data' => $dataArray]);
        }

    }

    public function submitForm(Request $request)
    {
  // Validate that 'data' is an array and its values are strings
    $validated = $request->validate([
        'data' => 'required|array',
        'data.*' => 'required|string',
    ]);

    $locale = session('locale', 'nl');

    $filePath = resource_path("lang/{$locale}.json");

    // Load existing data
    $jsonContent = file_get_contents($filePath);
    $dataArray = json_decode($jsonContent, true);

    // Loop over the submitted data and update/add each key-value pair
    foreach ($validated['data'] as $key => $value) {
        $dataArray[$key] = $value;
    }

    // Encode back to JSON with pretty print
    $updatedJson = json_encode($dataArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    // Save to file
    file_put_contents($filePath, $updatedJson);

        return back()->with('success', 'Content updated successfully!');


    }

}
