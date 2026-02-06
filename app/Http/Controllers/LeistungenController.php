<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LeistungenController extends Controller
{
    public function index(): View
    {
        return view('leistungen.index');
    }
}
