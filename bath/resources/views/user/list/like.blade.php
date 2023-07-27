@extends('layouts.common')

@section('content')
<div class="container">
    <h1>お気に入りした施設一覧</h1>

    @if (count($likes) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>施設名</th>
                    <th>施設情報</th>
                    <!-- 他の商品情報のヘッダーを追加 -->
                </tr>
            </thead>
            <tbody>
                @foreach ($likes as $like)
                    <tr>
                        <td>{{ $like->bath_name }}</td>
                        <td>{{ $like->information }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>いいねした商品はありません。</p>
    @endif
</div>
<form action="{{ route('user.index', ['id' => $user]) }}" method="GET">
    @csrf
<button class="mx-4">マイページ</button>
</form>
@endsection
