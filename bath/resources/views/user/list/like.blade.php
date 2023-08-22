@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('layouts.common')
@section('content')

<section class="text-gray-600 body-font ">
    <div class="relative">
        <img src="{{ asset('images/yamaga-city-g66acf2d15_1920.jpg')}}" alt="" class="absolute inset-0 -z-10 w-full object-cover object-right md:object-center" style="filter: blur(1px); position: sticky; top: 0;">
        <div class="absolute inset-0 z-10 bg-gray opacity-40"></div>
            <div class="container px-5 py-24 mx-auto relative z-10">
                <div class="dropdown">
                    <form action="{{ route('user.index', ['id' => $user]) }}" method="GET">
                        @csrf
                        <button class="bg-gray-400 text-white active:bg-gray-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <a class="dropdown-item" href="{{ route('user.index', ['id' => $user]) }}">マイページ</a>
                        </button>
                    </form>
                </div>
                <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-100">いいねした施設</h1>
                    <div class="container px-5 py-24 mx-auto">
                        @if (count($likes) > 0)
                            @foreach ($likes as $like)
                                <div class="container px-5 py-24 mx-auto">
                                    <div class="bg-red-100 bg-opacity-75 pt-16 pb-24 rounded-full overflow-hidden text-center relative">
                                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $like->name }}</h1>
                                        <p class="leading-relaxed mb-3">{{ $like->address }}</p>
                                        <form action="{{ route('user.item.show', ['item' => $like->id]) }}" method="GET">
                                            @csrf
                                            <button class="text-yellow-500 inline-flex items-center">
                                                施設に行く
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-2xl text-gray-100 font-medium text-gray-900 title-font mb-2">いいねした施設はありません。</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
