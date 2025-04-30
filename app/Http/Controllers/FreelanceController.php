<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreelanceController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.freelance');
    }
}
