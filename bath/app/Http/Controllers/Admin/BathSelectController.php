<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\AdminBath;
use App\Models\Bath;
use App\Models\Admin;
use Illuminate\Http\Request;

class BathSelectController extends Controller
{
    public function __construct()
    {   //認証されていたら各メソッド実行
        $this->middleware('auth:admin');
    }

    public function selectShop()
    {
        $bathId = AdminBath::where('admin_id', '=', Auth::id())->get()->pluck('bath_id');
        // dd($bathId);
        $baths = Bath::whereIn('id', $bathId)->get();

        return view('admin.select', compact('baths'));
    }

    public function index(Request $request)
    {
        $baths = Bath::all();
        return view('admin.select', compact('baths'));
    }

    public function saveSelectedBath(Request $request)
    {
        $adminId = Auth::id();
        $selectedBathId = $request->input('bath_id');

        // admin_bath_selected テーブルに選択結果を保存
        Admin::find($adminId)->selectedBaths()->sync([$selectedBathId]);

        return redirect()->route('admin.dashboard')->with('success', 'ショップが選択されました。');
    }
}
