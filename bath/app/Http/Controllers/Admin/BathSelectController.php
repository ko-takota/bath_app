<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\AdminBath;
use App\Models\Bath;
use Illuminate\Http\Request;

class BathSelectController extends Controller
{
    public function __construct()
    {   //認証されていたら各メソッド実行
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $bathId = AdminBath::where('admin_id', '=', Auth::id())->get()->pluck('bath_id');
        // dd($bathId);
        $baths = Bath::whereIn('id', $bathId)->get();

        return view('admin.select', compact('baths'));
    }
}
