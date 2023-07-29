@extends('layouts.common')

@section('content')
    <div>
        <h1>会員情報編集</h1>
        <form method="post" action="{{ route('user.information.update', ['information' => $user->id]) }}">
            @method('PUT')
            @csrf
            <input type="hidden" name="userId" value="{{ $user->id }}" />
            <p>ユーザー名：<input type="text" name="name" value="{{ $user->name }}" cols="40"></p>
            <p>メールアドレス：<input type="string" name="email" value="{{ $user->email }}" rows="4" cols="40"></p>
            <p>パスワード：<input type="password" name="password" rows="4" cols="40"></p>
            <p>パスワード確認：<input type="password" name="password_confirmation" rows="4" cols="40"></p>
        {{-- 変更失敗時のメッセージ --}}
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <p><input type="submit" value="更新"></p>
        <a href="/information">戻る</a>
    </div>
@endsection
