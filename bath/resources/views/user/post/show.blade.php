@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('layouts.common')
<section class="text-gray-600 body-font ">
    <img src="{{ asset('images/22296391.jpg')}}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center" style="filter: blur(4px);">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-black">{{ Auth::user()->name }}さん</h1>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6">
                    <table class="table-auto w-full text-left whitespace-no-wrap">
                        <thead>
                            <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl"  style="font-weight: bold;">口コミできる施設一覧</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br" ></th>
                            </tr>
                        </thead>
                        @foreach ($carts as $cart)
                            <tbody class="hover:bg-gray-200">
                                <tr>
                                <td class="px-4 py-3">施設名：{{ $cart->bath->name }}　プラン名：{{ $cart->plan->name }}</td>
                                <td class="px-4 py-3">
                                    <button onclick="location.href='{{ route('user.post.create', ['bathName' => $cart->bath->name, 'bathId' => $cart->bath, 'planId' => $cart->plan->id ]) }}'" class="text-white bg-yellow-500 border-0 py-2 px-3 focus:outline-none hover:bg-yellow-600 rounded">口コミする</button>
                                </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
