<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Bath;

class BathController extends Controller
{
    public function __construct()
    {
        //管理者かどうかの確認
        $this->middleware('auth:admin');

        //別のアカウントにログインされないように
        $this->middleware(function($request, $next) {

            $id = $request->route()->parameter('bath');//ログイン管理者が持つ施設ID
            if(!is_null($id)) {
                $bathAdminId = Bath::findOrFail($id)->admin->id;
                $bathId = (int)$bathAdminId;
                $adminId = Auth::id();
                if($bathId !== $adminId) { //同じで無ければ
                    abort(404); //404画面
                }
            }
            return $next($request);
        });
    }

    public function index()
    {
        $bath =  Bath::where('admin_id', Auth::id())->first();
        // dd($bath);

        return view('admin.bath.index', compact('bath'));
    }

    public function edit($id)
    {
        $baths = (Bath::findOrFail($id));

        return view('admin.bath.edit', compact('baths'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->image;
        if(!is_null($image) && $image->isValid()){
            Storage::putFile('public/baths', $image);
        }

        return redirect()->route('admin.bath.index');
    }
}
