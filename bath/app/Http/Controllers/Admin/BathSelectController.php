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

    public function selectbath()
    {
        // $bathId = AdminBath::where('admin_id', '=', Auth::id())->get()->pluck('bath_id');
        // dd($bathId);
        $baths = Auth::user()->baths;

        return view('layouts.admin-navigation', compact('baths'));
    }

    public function saveSelectBath(Request $request)
    {
        $selectedBathId = $request->bath_id;

        $adminId = Auth::id();
        // admin_bath_selected テーブルに選択結果を保存
        Admin::find($adminId)->selectedBaths()->sync([$selectedBathId]);

        return redirect()->route('admin.bath.show', ['id' => $selectedBathId])->with('success', 'ショップが選択されました。');
    }
}
