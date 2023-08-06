@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('layouts.common')
@section('content')

<section class="text-gray-600 body-font ">
<img src="{{ asset('images/1181936.jpg')}}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center" style="filter: blur(10px);">
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
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">お気に入りした施設一覧</h1>

        <div class="container px-5 py-24 mx-auto">

            @if (count($likes) > 0)
            <div class="-my-8 divide-y-2 divide-gray-100">
              <div class="py-8 flex flex-wrap md:flex-nowrap">
                <table class="table md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                    <thead>
                        <tr>
                            <th class="font-semibold title-font text-gray-500">施設名</th>
                            <th class="font-semibold title-font text-gray-500">施設情報</th>
                        </tr>
                    </thead>
                    <tbody class="md:flex-grow">
                        @foreach ($likes as $like)
                            <tr>
                                <td class="text-2xl font-medium text-gray-500 title-font mb-2">{{ $like->name }}</td>
                                <td class="leading-relaxed text-gray-500">{{ $like->information }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            @else
                <p class="text-2xl text-gray-500 font-medium text-gray-900 title-font mb-2">いいねした商品はありません。</p>
            @endif
        </div>
        @endsection
