<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class KarriereController extends Controller
{
    public function index(): View
    {
        return view('karriere.index');
    }
}
