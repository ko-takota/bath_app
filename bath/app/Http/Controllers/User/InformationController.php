<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class InformationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.information.index', compact('user'));
    }

    //会員情報編集ページ
    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('user.information.edit', compact('user'));
    }

    //編集した内容をDBに保存
    public function update(Request $request)
    {
        $user = User::findOrFail($request->userId);
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
        ]);


        return redirect("/information");
    }
}
