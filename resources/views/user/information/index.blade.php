@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('layouts.common')
@section('content')
<section class="text-gray-600 body-font ">
    <img src="{{ asset('images/24120406.jpg')}}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center" style="filter: blur(8px);">
    <div class="container px-5 py-24 mx-auto">
        <div class="dropdown">
            <form action="{{ route('user.index', ['id' => $user]) }}" method="GET">
                @csrf
            <button class="bg-gray-500 text-black active:bg-gray-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <a class="dropdown-item text-white" href="{{ route('user.index', ['id' => $user]) }}">マイページ</a>
            </button>
            </form>
        </div>
      <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-black">{{ Auth::user()->name }}さん</h1>
        <h2 class="lg:w-1/2 w-full leading-relaxed text-gray-600">会員情報の変更</h2>
      </div>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> --}}
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                            @if(session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <div class="hover:bg-gray-200 lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl"  style="font-weight: bold;">ユーザー名</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"  style="font-weight: bold;">メールアドレス</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br" ></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td class="px-4 py-3" style="font-weight: bold;">{{ $user->name }}</td>
                                        <td class="px-4 py-3" style="font-weight: bold;">{{ $user->email }}</td>
                                        <td class="px-4 py-3">
                                            <button onclick="location.href='{{ route('user.information.edit', ['information' => $user->id]) }}'" class="text-white bg-yellow-500 border-0 py-2 px-3 focus:outline-none hover:bg-yellow-600 rounded">編集</button>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection











