@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

@include('common.header')
@include('user.parts.prefecture')

@include('common.sidebar')

@section('content') {{-- メイン部分作成 --}}
<section>
    <div>
        <div>
            <img alt="content" src="https://min-chi.material.jp/mc/materials/background-c/hot_spring/_hot_spring_1.jpg">
        </div>
        <h2>温泉一覧</h2>
        <p>温泉情報が閲覧できます</p>
        <button>Button</button>
    </div>
    <div>
        <div>
        <img alt="content" src="https://as1.ftcdn.net/v2/jpg/01/28/83/34/1000_F_128833494_GrcSqh9237tYivfEyejNoHq6MRuFQj3X.jpg">
        </div>
        <h2>温泉一覧</h2>
        <p>温泉情報が閲覧できます</p>
        <button>Button</button>
    </div>
</section>
@endsection

{{-- フッター呼び出し --}}
@include('common.footer')



