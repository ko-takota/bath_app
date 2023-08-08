<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('施設登録・編集') }}
            <div class="flex justify-end">
                <button onclick="location.href='{{route('admin.create_bath')}}'" class="text-white bg-yellow-400 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-500 rounded text-lg">新規温泉施設作成</button>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    <div class="bg-white mb-6 p-6 text-gray-900 dark:text-gray-100">
                        <a href="{{ route('admin.bath.edit', ['id' => $bathId]) }}">
                            <div>
                                {{ $bath->value('name') }}
                            </div>
                            <div>
                                @if(empty($bath->value('image')))
                                    <img src="{{ asset('images/no_image.jpg')}}">
                                @else
                                    <img src="{{ asset('storage/baths/' . $bath->value('image'))}}">
                                @endif
                            </div>
                        </a>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
