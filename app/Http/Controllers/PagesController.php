<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function oleout()
    {
        return view('oleout');
    }

    public function about()
    {
        return view('about', ['nama' => 'Citra Bagus']);
    }
}
