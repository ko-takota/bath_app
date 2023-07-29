<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('user.information.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.information.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $information)
    {
        $user = User::findOrFail($information);

        if ($request->password === $request->password_confirmation) {
            // 新しいパスワードと確認用のパスワードが一致する場合の処理
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password); // 新しいパスワードをハッシュ化して保存
            $user->save();

            return redirect()->route('user.information.index')->with('message', '[ユーザー情報を更新しました。]');
        } else if (empty($request->password_confirmation)) {
            return redirect()->back()->with('error', '※パスワード確認に値を入力してください。');
        } else {
            return redirect()->route('user.information.edit', ['information' => $user->id])->with('error', '※入力したパスワードが違っています');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();//論理削除

        return redirect()->route('user.top')
        ->with('message','※アカウントを削除しました。トップに戻ります。');
    }
}
