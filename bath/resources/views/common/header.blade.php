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
            <button>
                {{-- <a href="{{ route('user.index', ['id' => $user_id]) }}"> --}}
                    マイページ
                {{-- </a> --}}
            </button>
            <form action="{{ route('logout')}}" method="POST">
            @csrf
            <button>ログアウト</button>
            </form>
            {{-- ユーザー新規登録・ログインしていない場合、新規登録・ログインボタン表示 --}}
            @else
            <button>
                <a href="{{ route('login')}}">ログイン</a>
            </button>
            <button>
                <a href="{{ route('register')}}">初めての方（新規会員登録）</a>
            </button>
            @endauth
            <form method="GET" action="URL">
                <input type="search" placeholder="温泉施設を探す...">
                <input type="submit" value="検索する">
            </form>
        </nav>
    </div>
  </header>
@endsection
