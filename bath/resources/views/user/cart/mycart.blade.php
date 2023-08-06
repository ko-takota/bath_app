@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="relative">
    <img src="{{ asset('images/22298731.jpg')}}" alt="" class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center" style="filter: blur(8px);">
    <div class="absolute inset-0 z-10 bg-gray opacity-40"></div>
    <div class="container px-0 py-24 mx-auto relative z-10 max-w-screen-xl">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">マイカート</h1>
            <div class="absolute top-4 right-4">
                <div class="dropdown">
                    <form action="{{ route('user.index', ['id' => $user]) }}" method="GET">
                        @csrf
                    <button class="bg-gray-400 text-white active:bg-gray-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <a class="dropdown-item" href="{{ route('user.index', ['id' => $user]) }}">マイページ</a>
                    </button>
                    </form>
                </div>
            </div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="max-w-screen-lg mx-auto">
                            <h1 class="text-white">{{Auth::user()->name}}さんのカートの中身</h1>
                            @if (count($carts) > 0)
                            @foreach ($carts as $cart)
                                @if($cart->plan) <!-- プランが存在する場合 -->
                                <div class="container px-5 py-24 mx-auto">
                                    <div class="flex items-center lg:w-3/5 mx-auto pb-10 mb-10 sm:flex-row flex-col">
                                    <div class="border border-gray-100 p-6 rounded-lg flex-grow sm:text-left text-center mt-6 sm:mt-0 hover:bg-gray-900" style="opacity: 0.7;">
                                        <h2 class="text-gray-100 text-lg title-font border-b font-medium mb-2">{{ $cart->plan->name }}</h2>
                                        <p class="text-white leading-relaxed text-base">{{ $cart->plan->contents }}</p>
                                        <a class="mt-3 text-lg text-gray-200 inline-flex border-b items-center">{{ $cart->plan->price }} <span class="text-gray-300">(月額)</span>
                                        </a>
                                        <form method="post" action="{{route('user.cart.delete', ['item' => $cart->id])}}">
                                            @csrf
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>{{-- ゴミ箱アイコン --}}
                                            </button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                @else
                                <!-- プランが論理削除された場合の表示 -->
                                <p>プランは削除されたため表示されません。</p>
                                @endif
                            @endforeach
                            @else
                                カートに選択された施設が入っていません。
                            @endif
                            <a href="{{route('user.search')}}" class="index">施設一覧へ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
