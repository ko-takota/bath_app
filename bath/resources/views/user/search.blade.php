<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('施設') }}
        </h2>
        <form method="GET" action="{{ route('user.search') }}" class="d-flex">
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("施設一覧") }}
                    @foreach ($baths as $bath)
                    <a href="{{ route('user.item.show', ['item' => $bath->id ]) }}">
                        <div>
                            <h3>{{ $bath->bath_name }}</h3>
                            <h2>{{ $bath->address }}</h2>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
