<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('施設一覧') }}
        </h2>
        <form method="GET" action="{{ route('user.bath.search') }}" class="d-flex">
            <div class="lg:flex lg:justify-around">
                <div class="lg:flex items-center">
                    <select name="category" class="lg:mb-0 lg:mr-1">
                        <option value="0" @if(\Request::get('category') === '0') selected @endif>全て</option>
                        @foreach ($categories as $category)
                        <optgroup label="{{ $category->name }}"></optgroup>
                         @foreach ($category->prefcture as $prefcture)
                         <option value="{{ $prefcture->id }}" @if(\Request::get('category') == $prefcture->id) selected @endif>
                            {{ $prefcture->name }}
                        </option>
                         @endforeach
                        @endforeach
                    </select>
                    <div class="flex space-x-2 items-center">
                        <div><input name="keyword" class="border border-gray-500 py-2" placeholder="キーワードを入力"></div>
                        <div><button class="ml-auth bg-indigo-500 text-white border-0 py-2 px-6">検索する</button></div>
                    </div>
                </div>
            </div>
        </form>
    </x-slot>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex justify-center">
            <div class="-m-4 lg:w-1/2">
                @foreach ($baths as $bath)
                <div class=" mt-8 mb-8 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <a href="{{ route('user.item.show', ['item' => $bath->id ]) }}" class="text-yellow-500  items-center md:mb-2 lg:mb-0">{{ $bath->image }}</a>
                        <div class="p-6">
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $bath->name }}</h1>
                            <p class="leading-relaxed mb-3">{{ $bath->address }}</p>
                            <div class=" items-center">
                            <a href="{{ route('user.item.show', ['item' => $bath->id ]) }}" class="text-yellow-500  items-center md:mb-2 lg:mb-0">
                                さらに詳しく
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
