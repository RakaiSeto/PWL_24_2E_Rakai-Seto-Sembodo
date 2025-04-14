<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $page = (object) [
            'title' => 'Ubah Profil'
        ];

        $breadcrumb = (object) [
            'title' => 'Ubah Profil',
            'list'  => ['Home', 'Ubah Profil']
        ];

        $activeMenu = 'profile';
        return view('change-profile', [
            'page' => $page,
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }

    public function doChangePhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
    
        // Get the file from request
        $photo = $request->file('photo');
        
        // Generate a unique filename
        $filename = 'user_photo_' . time() . '.' . $photo->getClientOriginalExtension();
        
        // Create profile_photos directory if it doesn't exist
        $directory = public_path('profile_photos');
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }
        
        // Move the file to public/profile_photos directory
        $photo->move($directory, $filename);
        
        // Get the public URL
        $publicPath = '/profile_photos/' . $filename;
        
        // Store the URL in session
        session()->put('user_foto', $publicPath);
    
        return response()->json([
            'success' => true,
            'message' => 'Photo uploaded successfully',
            'photo_url' => $publicPath
        ]);
    }
}
