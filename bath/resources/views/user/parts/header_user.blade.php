@section('header')
<nav x-data="{ isOpen: false }" class="relative bg-white shadow dark:bg-gray-300">
    <div class="container px-6 py-3 mx-auto md:flex">
        <div class="flex items-center justify-between">
            <img class="w-auto h-6 sm:h-7" src="https://tsukatte.com/wp-content/uploads/2020/08/onsen-mark.png" alt="">
        </div>
        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-300 md:mt-0 md:p-0 md:top-0 md:relative md:opacity-100 md:translate-x-0 md:flex md:items-center md:justify-between">
            <form action="{{ route('user.logout')}}" method="POST">
                @csrf
            <button class="mt-4">ログアウト</button>
            </form>
        </div>
    </div>
</nav>
@endsection
