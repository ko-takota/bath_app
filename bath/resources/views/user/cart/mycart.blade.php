
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            マイカート
        </h2>
    </x-slot>
   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1>{{Auth::user()->name}}さんのカートの中身</h1>
                @if (count($baths) > 0)
                    @foreach ($baths as $bath)
                        <div class="md:flex md:item-center">
                            <div class="md:w-5/12">{{ $bath->name }}</div>
                            <div class="md:w-4/12">{{ number_format($bath->price)}}<span class="text-sm text-gray-400">円（月額）</span></div>
                            <div class="md:w-3/12">
                              <form method="post" action="{{route('user.cart.delete', ['item' => $bath->id])}}">
                                @csrf
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>{{-- ゴミ箱アイコン --}}
                                </button>
                              </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    カートに選択された施設が入っていません。
                @endif
                <div>
                    <a href="{{route('user.search')}}" class="index">商品一覧へ</a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>