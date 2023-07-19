<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            銭湯の詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="text-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $bath->bath_name }}
                </div>
                <div class="bg-white">
                    <nav>{{ $bath->information }}</nav>
                </div>
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                ￥{{ number_format($bath->price) }}
            </div>
            <form method="post" action="{{ route('user.cart.add')}}">
            @csrf
            <button class="flex ml-auth bg-white text-brack border-0 py-2 px-6">入会</button>
            <input type="hidden" name="bath_id" value="{{ $bath->id }}">
            </form>
        </div>
    </div>
</x-app-layout>
