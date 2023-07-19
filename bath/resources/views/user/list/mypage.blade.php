@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- src/resources/views/layouts/common.blade.php継承 --}}
@extends('layouts.common')

@include('user.parts.header_user')

@include('user.parts.sidebar_user')
@include('common.footer')

@section('content')
<section>
<div>
    <div>
        <div>投稿</div>
        <div>
            <button>新規追加</button>
        </div>
    </div>
    <div>
        <table>
            <thead>
                 <tr>
                    <th>タイトル</th>
                    <th>投稿ID</th>
                    <th>カテゴリー</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <p>温泉投稿</p>
                    <a href="#">Edit</a>
                    <a href="#">delete</a>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</section>
@endsection
