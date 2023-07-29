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
        </form>
        <form id="delete_{{$user->id}}" method="POST" action="{{ route('user.information.destroy', ['information' => $user->id]) }}">
            @method('delete')
            @csrf
        <a href="#" data-id="{{ $user->id }}" onclick="deletePost(this)" class="text-red-600">アカウント削除</button>
        </form>
    </div>
    <script>
        function deletePost(e) {
            if(confirm('本当にアカウントを削除してもいい？')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
@endsection
