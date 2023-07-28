@section('header')
<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a>
        <span class="ml-3 text-xl">〜お気に入りのマイ風呂探し〜</span>
      </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            {{-- 認証によって、ボタン表示の切り替え --}}
            @auth
            <form action="{{ route('user.index', ['id' => $user_id]) }}" method="GET">
                @csrf
            <button class="mx-4">マイページ</button>
            </form>
            <form action="{{ route('user.logout')}}" method="POST">
            @csrf
            <button class="mx-4">ログアウト</button>
            </form>
            {{-- ユーザー新規登録・ログインしていない場合、新規登録・ログインボタン表示 --}}
            @else
            <button class="mx-4">
                <a href="{{ route('user.login')}}">ログイン</a>
            </button>
            <button class="mx-4">
                <a href="{{ route('user.register')}}">初めての方(新規会員登録)</a>
            </button>
            <button class="mx-4">
                <a href="{{ route('user.search')}}">検索</a>
            </button>
            @endauth
        </nav>
    </div>
  </header>
@endsection
