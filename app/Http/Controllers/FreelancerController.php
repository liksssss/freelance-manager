<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.freelancer');
    }
}
