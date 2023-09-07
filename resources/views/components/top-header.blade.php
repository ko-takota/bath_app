<header class="text-gray-900 bg-yellow-700 body-font" style="position: sticky; top: 0; z-index: 100;">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="#">
            <h1 class="sm:text-3xl text-white font-medium title-font" style="background-image: linear-gradient;">バスクリプション</h1>
        </a>
        <nav class="flex lg:w-3/5 flex-wrap items-center text-base md:ml-auto">
            <a href="{{ route('user.bath_news') }}" class="mr-5 hover:text-white">お知らせ</a>
            <a href="#comment" class="mr-5 hover:text-white">口コミ</a>
            <a href="#attract" class="mr-5 hover:text-white">魅力</a>
            <a href="/contact" class="mr-5 hover:text-white">お問い合わせ</a>
             <!--認証によって、ボタン表示の切り替え -->
            @auth
                <form action="{{ route('user.index', ['id' => Auth::id()]) }}" method="GET">
                    @csrf
                    <button class="mr-5 mt-4 hover:text-white">マイページ</button>
                </form>
                <form action="{{ route('user.logout')}}" method="POST">
                    @csrf
                    <button class="mr-5 mt-4 hover:text-white">ログアウト</button>
                </form>
            <!-- ユーザー新規登録・ログインしていない場合、新規登録・ログインボタン表示 -->
            @else
                <button class="mr-5 hover:text-white">
                    <a href="{{ route('user.login')}}">ログイン</a>
                </button>
                <button class="mr-5 hover:text-white">
                    <a href="{{ route('user.register')}}">初めての方(新規会員登録)</a>
                </button>
            @endauth
            <button class="inline-flex items-center bg-gray-400 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="{{ route('user.search') }}">施設検索</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </nav>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">

        </div>
    </div>
</header>