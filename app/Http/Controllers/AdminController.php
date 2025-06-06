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
            // for text fields
            // 'data.*' => 'nullable|string',
        ]);

        $locale = session('locale', 'nl');

        $filePath = resource_path("lang/{$locale}.json");

        // Load existing data
        $jsonContent = file_get_contents($filePath);
        $dataArray = json_decode($jsonContent, true);

        // if have to check if the 'data.features' key exists in the validated array
        if (isset($validated['data']['features']) && is_array($validated['data']['features'])) {
            $dataArray['features'] = [];

            foreach ($validated['data']['features'] as $index => $feature) {
                $description = $feature['description'];
                $oldimage = $feature['oldimage'] ?? null;
                $fileKey = "data.features.$index.image";
                if ($request->hasFile($fileKey)) {
                    $file = $request->file($fileKey);
                    if ($file->isValid()) {
                        $destinationPath = public_path('assets/images');
                        if (!file_exists($destinationPath)) {
                            mkdir($destinationPath, 0755, true);
                        }
                        $filename = time() . '_' . $file->getClientOriginalName();
                        $file->move($destinationPath, $filename);
                        $imageUrl = "assets/images/$filename";
                        if ($description) {
                            $dataArray['features'][] = [
                                'description' => $description,
                                'image' => $imageUrl,
                            ];
                        }
                    }
                } else {
                            if($description){
                        $dataArray['features'][] = [
                            'description' => $description,
                            'image' => $oldimage, // or default image path
                        ];
                    }
                }
            }
            unset($validated['data']['features']);
        }  // if have to check if the 'data.features' key exists in the validated array

        foreach ($validated['data'] as $key => $value) {
            // Check if this key has a file upload
            if ($request->hasFile("data.$key")) {
                $file = $request->file("data.$key");

                if ($file->isValid()) {
                    // Define target directory
                    $destinationPath = public_path('assets/images');

                    // Create directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Generate unique filename
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // Move the file to public/assets/images
                    $file->move($destinationPath, $filename);

                    // Save the URL (not the path) into the JSON
                    $imageUrl = ("assets/images/$filename");

                    $dataArray[$key] = $imageUrl;
                }
            } else {
                // For normal text fields
                $dataArray[$key] = $value;
            }
        }

        // Encode back to JSON with pretty print
        $updatedJson = json_encode($dataArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        // Save to file
        file_put_contents($filePath, $updatedJson);

        return back()->with('success', 'Content updated successfully!');

    }

}
