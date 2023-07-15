商品一覧
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ホーム') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("一覧") }}
                    @foreach ($baths as $bath)
                    <a href="{{ route('user.item.show', ['item' => $bath->id ]) }}">
                        <div>
                            <h3>{{ $bath->bath_name }}</h3>
                            <h2>{{ $bath->address }}</h2>
                            <a>{{ number_format($bath->price) }}<span class="text-sm text-gray-400">円（月額）</span></a>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
