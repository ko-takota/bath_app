<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('admin.bath.update', ['bath' => $baths->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="-m-2">
                            <div class="p-2 w-1/22 mx-auto">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">施設名 ※必須</label>
                                    <input type="text" id="name" name="name" value="{{ $baths->name }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="p-2 w-1/22 mx-auto">
                                <div class="relative">
                                    <label for="information" class="leading-7 text-sm text-gray-600">施設情報 ※必須</label>
                                    <textarea id="information" name="information" rows="10" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $baths->information }}</textarea>
                                </div>
                            </div>
                            <div class="p-2 w-1/22 mx-auto">
                                <div class="relative">
                                    <label for="address" class="leading-7 text-sm text-gray-600">施設住所 ※必須</label>
                                    <input type="address" id="address" name="address" value="{{ $baths->address }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="p-2 w-1/22 mx-auto">
                                <div class="relative">
                                    <label for="address" class="leading-7 text-sm text-gray-600">都道府県選択 ※必須</label>
                                    <select name="category" class="lg:mb-0 lg:mr-1">
                                        @foreach ($categories as $category)
                                            <option label="{{ $category->name }}">{{ $category->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 w-1/22 mx-auto">
                                <div class="relative">
                                    <div class="w-32">
                                        @if(empty($baths->image))
                                        <img src="{{ asset('images/no_image.jpg')}}">
                                        @else
                                        <img src="{{ asset('storage/baths/' . $baths->image)}}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 w-1/22 mx-auto">
                                <div class="relative">
                                    <label for="image" class="leading-7 text-sm text-gray-600">画像</label>
                                    <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/jpg" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="p-2 w-full flex justify-around mt-6">
                                <button type="button" onclick="location.href='{{route('admin.bath.index')}}' " class="bg-gray-100 border-0 py-2 px-8 focus:outline-none hover:bg-gray-300 rounded text-lg">戻る</button>
                                <button type="submit" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">更新</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
