<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('施設登録・編集') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <a href="{{ route('admin.bath.edit', ['bath' => $bath->id]) }}">
                    <div>
                    {{ $bath->name }}
                    </div>
                    <div>
                        @if(empty($bath->image))
                         <img src="{{ asset('images/no_image.jpg')}}">
                        @else
                         <img src="{{ asset('storage/baths/' . $bath->image)}}">
                        @endif
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
