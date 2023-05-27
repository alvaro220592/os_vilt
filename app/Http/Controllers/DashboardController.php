<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index(){
        return inertia('Dashboard', ['clients' => Client::all()]);
    }
}
