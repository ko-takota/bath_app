@section('sidebar')
<h2>お気に入り温泉探し</h2>
    <div class="list-group">
        <nav>
            <a class="list-group-item" href="#">
                <span class="mx-4 font-medium">総合トップ</span>
            </a><br>
            {{-- ユーザー新規登録・ログイン済みならマイページ表示 --}}
            @auth
            {{-- <a class="list-group-item" href="{{ route('user.index', ['id' => $user_id]) }}"> --}}
                <span class="mx-4 font-medium">マイページ</span>
            </a><br>
            @endauth
            <a class="list-group-item" href="#">
                <span class="mx-4 font-medium">検索</span>
            </a><br>
            <a class="list-group-item" href="#">
                <span>-</span>
                <span class="mx-4 font-medium">カテゴリー</span>
            </a><br>
            <a class="list-group-item" href="#">
                <span>-</span>
                <span class="mx-4 font-medium">カテゴリー</span>
            </a><br>
            <a class="list-group-item" href="#">
                <span>-</span>
                <span class="mx-4 font-medium">カテゴリー</span>
            </a>
        </nav>
    </div>
@endsection
