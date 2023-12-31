@section('footer')
<footer class="body-font bg-yellow-700">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <x-bath-logo/>
        <span class="ml-3 text-xl">〜お気に入り温泉探し〜</span>
        <x-bath-logo/>
      </a>
      <p class="text-sm text-black mr-3 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©copyright</p>
      <a href="/terms" class="p-2 hover:text-white">利用規約</a>
      <a href="/privacypolicy" class="p-2 hover:text-white">プライバシーポリシー</a>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            {{-- 認証によって、ボタン表示の切り替え --}}
            @auth
                <form action="{{ route('user.index', ['id' => $user_id]) }}" method="GET">
                    @csrf
                    <button class="mx-4 hover:text-white">マイページ</button>
                </form>
                <form action="{{ route('user.logout')}}" method="POST">
                    @csrf
                    <button class="mx-4 hover:text-white">ログアウト</button>
                </form>
            {{-- ユーザー新規登録・ログインしていない場合、新規登録・ログインボタン表示 --}}
            @else
                <button class="mx-4 hover:text-white">
                    <a href="{{ route('user.login')}}">ログイン</a>
                </button>
                <button class="mx-4 hover:text-white">
                    <a href="{{ route('user.register')}}">初めての方(新規会員登録)</a>
                </button>
            @endauth
        </nav>
      </span>
    </div>
  </footer>
@endsection
