<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    //
    public function showAdminDashboard(){
        return view('admin.dashboard_admin');
    }
}