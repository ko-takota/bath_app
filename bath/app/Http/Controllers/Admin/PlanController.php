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
        //管理者が持ってる施設のidを取得
        $adminBathIds = Auth::user()->baths->pluck('id');
        //管理者が選択した施設のID
        $adminSelectBath = DB::table('admin_bath_selected')->whereIn('bath_id', $adminBathIds)->get();

        $myPlans = Plan::where('bath_id', $adminSelectBath->pluck('bath_id'))->get();

        $bathId = $adminSelectBath->value('bath_id');
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
        return view('admin.plan.create');
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

        $bath_id = Auth::user()->baths->value('id');

        Plan::create(
            [
                'name' => $request->name,
                'price' => $request->price,
                'contents' => $request->contents,
                'bath_id' => $bath_id,
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
