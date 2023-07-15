<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            銭湯の詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $bath->bath_name }}
                </div>
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                ￥{{ number_format($bath->price) }}
            </div>
            <button class="flex ml-auth bg-white text-brack border-0 py-2 px-6">入会</button>
        </div>
    </div>
</x-app-layout>
