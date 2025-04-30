<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Invoice;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class AdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user(); // Use Auth facade
        return view('admin.dashboard', [
            'user' => $user,
            'totalUsers' => User::count(),
            'totalProjects' => Project::count(),
            'totalInvoices' => Invoice::count(),
            'totalClients' => Client::count(),
        ]);
    }
}
