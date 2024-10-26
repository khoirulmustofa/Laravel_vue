<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ComponentPropEventController extends Controller
{
    public function index()
    {
        return Inertia::render('ComponentPropEvent');
    }
}
