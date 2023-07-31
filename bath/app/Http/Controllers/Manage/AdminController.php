<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:manage');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all('id', 'name','email', 'created_at');

        return view('manage.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        return redirect()->route('manage.admin.index')
        ->with('message', '管理者登録しました。');
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
        $admin = Admin::findOrFail($id);

        return view('manage.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        //if文で入力されたpasswordとpassword_confirmation比較するためにHash化
        if ($request->password === $request->password_confirmation) {
            // 新しいパスワードと確認用のパスワードが一致する場合の処理
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password); // 新しいパスワードをハッシュ化して保存
            $admin->save();

            return redirect()->route('manage.admin.index')
            ->with('message', '管理者情報を更新しました。');

        } else if (empty($request->password_confirmation)) {
            return redirect()->back()->with('error', '※パスワード確認に値を入力してください。');

        } else {
            return redirect()->route('manage.admin.edit', ['admin' => $admin->id])->with('error', '※入力したパスワードが違っています');
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
        Admin::findOrFail($id)->delete();

        return redirect()->route('manage.admin.index')
        ->with('message', 'アカウントを削除しました。');
    }
}
