@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

@include('common.header')

@include('common.sidebar')

@section('content') {{-- メイン部分作成 --}}
<section>
    <div>
        <h2>温泉一覧</h2>
        <p>温泉情報が閲覧できます</p>
        <button>Button</button>
    </div>
    <div>
        <h2>温泉一覧</h2>
        <p>温泉情報が閲覧できます</p>
        <button>Button</button>
    </div>
</section>
@endsection

{{-- フッター呼び出し --}}
@include('common.footer')



