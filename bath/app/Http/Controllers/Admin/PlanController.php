<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class PlanController extends Controller
{
    public function __construct()
    {
        //認証されていたら各メソッド実行
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //プラン一覧ページを表示
    public function index()
    {
        $admin = Auth::user();
        //管理者が選択した施設のID
        $selectBathId = DB::table('admin_bath_selected')->where('admin_id', $admin->id)->value('bath_id');

        $myPlans = Plan::where('bath_id', $selectBathId)->get();

        $bathId = $selectBathId;
        return view('admin.plan.index', compact('myPlans', 'bathId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //プラン作成ページを表示
    public function create()
    {
        $bathId = DB::table('admin_bath_selected')->where('admin_id', Auth::id())->value('bath_id');

        return view('admin.plan.create', compact('bathId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //プランをDBに保存
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'price' => ['required', 'numeric'], // 価格は整数型としてバリデーション
            'contents' => ['required', 'string', 'max:250'],
        ]);

        Plan::create(
            [
                'name' => $request->name,
                'price' => $request->price,
                'contents' => $request->contents,
                'bath_id' => $request->id,
            ]);
        return redirect()->route('admin.plan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //プラン詳細ページ
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //プラン編集ページ
    public function edit($id)
    {
        $plan = Plan::findOrFail($id);

        return view('admin.plan.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //編集した内容をDBに保存
    public function update(Request $request, plan $plan)
    {
        $plan->fill($request->all())->save();
        return redirect()->route('admin.plan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //プランを削除
    public function destroy($id)
    {
        Plan::findOrFail($id)->delete();

        return redirect()->route('admin.plan.index');
    }
}
