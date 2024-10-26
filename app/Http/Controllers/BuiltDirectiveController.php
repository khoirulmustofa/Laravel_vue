<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BuiltDirectiveController extends Controller
{
    public function index()
    {
        return Inertia::render('BuiltDirective');
    }
}
