<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Bath;
use App\Models\PrefctureCategory;
use App\Models\AdminBath;



class BathCreateController extends Controller
{
    public function bathCreateForm()
    {
        $categories = PrefctureCategory::select('id', 'name')->get();
        return view('admin.create_bath', compact('categories'));
    }

    public function create(Request $request)
    {
        //ログイン後、温泉施設登録処理
        $bath = new Bath([
            'name' => $request->name,
            'information' => $request->information,
            'address' => $request->address,
            'admin_id' => Auth::id(),
            'prefcture_category_id' => $request->category,
        ]);
        $bath->save();

        //↑の温泉施設登録処理ができたら、中間テーブルにも保存処理
        if($bath){
            $adminBath = new AdminBath([
                'admin_id' => $bath->admin_id,
                'bath_id' => $bath->id,
            ]);
            $adminBath->save();
        }

        //view（admin.select）で使用
        // $bathId = AdminBath::where('admin_id', '=', Auth::id())->get()->pluck('bath_id');
        // $baths = Bath::whereIn('id', $bathId)->get();


        return redirect()->route('admin.create_bath');

    }
}
