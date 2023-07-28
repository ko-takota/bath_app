@extends('layouts.common')

@section('content')
    <div>
        <h1>会員情報編集</h1>
        <form action="/information" method="post">
            @csrf
            <input type="hidden" name="userId" value="{{ $user->id }}" />
            <p>ユーザー名：<input type="text" name="name" value="{{ $user->name }}" cols="40"></p>
            <p>メールアドレス：<input type="string" name="email" value="{{ $user->email }}" rows="4" cols="40"></p>
            <!-- 他の会員情報の編集項目を追加 -->

            <p><input type="submit" value="更新"></p>
        <a href="/information">戻る</a>
    </div>
@endsection
