@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="relative">
    <img src="{{ asset('images/1237241_s.jpg')}}" alt="" class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center" style="filter: blur(2px);">
    <div class="absolute inset-0 bg-white z-10 opacity-40"></div>
    <div class="container px-0 py-24 mx-auto relative z-10 max-w-screen-xl">
        <div class="w-full mb-20 flex-col items-center text-center">
            <h1 class="text-3xl bg-white font-medium title-font">カートに入れたプラン情報</h1>
            <h1 class="mt-6 bg-white">{{Auth::user()->name}}さんのカートの中身</h1>
            <div class="absolute top-4 right-4">
                <div class="dropdown">
                    <form action="{{ route('user.index', ['id' => $user]) }}" method="GET">
                        @csrf
                    <button class="bg-gray-400 active:bg-gray-700 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <a class="index bg-gray-400 hover:text-gray-300" href="{{ route('user.index', ['id' => $user]) }}">マイページ</a>
                    </button>
                    </form>
                </div>
            </div>

            <div class="container px-5 py-12 mx-auto">
                <div class="flex flex-wrap -mx-4 -my-8">
                    <div class="py-8 px-4 overflow-x-auto">
                        <div class="h-full flex items-start">
                            <div class="relative w-full h-full">
                                <div class="max-w-screen-xl mx-auto relative flex justify-start p-6 bg-opacity-75">
                                    @if (count($carts) > 0)
                                        @foreach ($carts->sortByDesc('created_at') as $cart)
                                            @if($cart->plan) <!-- プランが存在する場合 -->
                                                <a href="{{ route('user.item.show', ['item' => $cart->bath_id ])}}">
                                                    <div class="flex-shrink-0 w-72 bg-yellow-200 shadow-md p-8 rounded-lg m-24">
                                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $cart->plan->bath->name }}<br>プラン名：{{ $cart->plan->name }}</h1>
                                                        <p class="font-medium text-gray-900 mt-3">{{ $cart->plan->contents }}</p>
                                                        <p class="leading-relaxed mb-5">{{ $cart->plan->price }}<span class="text-gray-500">(月額)</span></p>
                                                        <form method="post" action="{{route('user.cart.delete', ['item' => $cart->id])}}" class="mt-12">
                                                            @csrf
                                                            <button>
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:scale-150">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                </svg>{{-- ゴミ箱アイコン --}}
                                                            </button>
                                                        </form>
                                                    </div>
                                                </a>
                                            @else
                                            <!-- プランが論理削除された場合の表示 -->
                                            <p class="bg-yellow-500">プランは削除されたため表示されません。</p>
                                            @endif
                                        @endforeach
                                    @else
                                        <p class="bg-yellow-500">カートに選択された施設が入っていません。</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-2 bg-white">
                    合計：{{ number_format($totalPrice) }}<span class="text-sm">円(月額)</span>
                </div>
                @if (count($carts) > 0)
                <div>
                    <button onclick="location.href='{{ route('user.cart.pay') }}'" class="bg-yellow-400 border-0 py-2 px-3 focus:outline-none hover:bg-yellow-600 rounded">購入する</button>
                </div>
                @endif
            </div>
            <button class="bg-gray-400 active:bg-gray-700 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <a href="{{route('user.search')}}" class="index bg-gray-400 hover:text-gray-300">施設一覧へ</a>
            </button>
        </div>
    </div>
    </div>
</div>
