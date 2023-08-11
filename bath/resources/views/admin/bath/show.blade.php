<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    施設名：{{ $bath->name }}
                </h2>
                <x-admin-navi/>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-end">
                        <a href="{{ route('admin.bath.edit', ['id' => $bath]) }}">
                            <p class="text-black bg-yellow-400 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-500 rounded">編集する</p>
                        </a>
                    </div>
                    <div class="-m-2">
                        <div class="p-2 w-1/22 mx-auto">
                            <div class="relative">
                                <label class="leading-7 text-sm text-gray-600">施設情報</label><br>
                                <label class="w-full bg-gray-200 bg-opacity-50 rounded text-base outline-none text-gray-700 py-1 px-3">{{ $bath->information }}</label>
                            </div>
                        </div>
                        <div class="p-2 w-1/22 mx-auto">
                            <div class="relative">
                                <label class="leading-7 text-sm text-gray-600">施設住所</label><br>
                                <label class="w-full bg-gray-200 bg-opacity-50 rounded text-base outline-none text-gray-700 py-1 px-3">{{ $bath->address }}</label>
                            </div>
                        </div>
                        @if(empty($bath->image))
                        <img src="{{ asset('images/no_image.jpg')}}">
                        @else
                        <img src="{{ asset('storage/baths/' . $bath->image)}}">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
