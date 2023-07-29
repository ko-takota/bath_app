@extends('layouts.common')

@section('content')
    <div>
        <h1>会員情報</h1>
        {{--変更成功の場合のメッセージ--}}
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        
        <form action="{{ route('user.information.edit', ['information' => $user->id])}}">
            @csrf
        <p>ユーザー名：{{ $user->name }}</p>
        <p>メールアドレス：{{ $user->email }}</p>

        <button>会員情報の変更</button>
        </form>

        <form action="{{ route('user.index', ['id' => $user]) }}" method="GET">
            @csrf
        <button class="mx-4">マイページ</button>
    </div>
@endsection
