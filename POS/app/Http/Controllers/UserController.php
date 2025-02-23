<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request) {
        $id = $request->id;
        $name = $request->name;

        $title = "Profile";

        return view('page.profile', compact('id', 'name', 'title'));
    }
}
