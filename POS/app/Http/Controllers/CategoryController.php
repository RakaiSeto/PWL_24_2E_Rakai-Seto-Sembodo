<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function kids()
    {
        return view("page.kids", [
            'title' => 'Baby & Kids',
        ]);
    }

    public function beauty()
    {
        return view('page.beauty', [
            'title' => 'Beauty & Health',
        ]);
    }

    public function food()
    {
        return view('page.foodbeverage', [
            'title' => 'Food & Beverage',
        ]);
    }

    public function home()
    {
        return view('page.homecare', [
            'title' => 'Home Care',
        ]);
    }
}
