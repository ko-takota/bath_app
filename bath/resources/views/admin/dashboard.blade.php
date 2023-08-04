<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        @if($selectedBath)
            <h2>選択されたショップ: {{ $selectedBath->name }}</h2>
            <!-- その他、ショップの情報を表示 -->
        @else
            <p>ショップが選択されていません。</p>
        @endif
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('admin.member') }}">会員一覧</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
