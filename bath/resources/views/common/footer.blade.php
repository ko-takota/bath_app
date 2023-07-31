@section('footer')
<footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img class="w-auto h-6 sm:h-7" src="https://tsukatte.com/wp-content/uploads/2020/08/onsen-mark.png" alt="">
        <span class="ml-3 text-xl">〜お気に入り温泉探し〜</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©copyright</p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
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
            @endauth
            <button class="mx-4 mb-4">
                <a href="{{ route('user.search')}}">検索</a>
            </button>

        </nav>
      </span>
    </div>
  </footer>
@endsection
