@section('footer')
<footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img class="w-auto h-6 sm:h-7" src="https://tsukatte.com/wp-content/uploads/2020/08/onsen-mark.png" alt="">
        <span class="ml-3 text-xl">〜お気に入り温泉探し〜</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©copyright</p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <form action="{{ route('user.logout') }}" method="POST">
            @csrf
                <button>
                <span>ログアウト</span>
                </button>
        </form>
      </span>
    </div>
  </footer>
@endsection
