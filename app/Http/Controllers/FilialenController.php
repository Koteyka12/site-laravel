<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class FilialenController extends Controller
{
    public function index(): View
    {
        return view('filialen.index');
    }
}
