<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;

class DashboardController extends Controller
{
    public function dashboard()
{
    $adminId = Auth::id();
    $selectedBath = Admin::find($adminId)->selectedBaths()->first();

    return view('admin.dashboard', compact('selectedBath'));
}
}
