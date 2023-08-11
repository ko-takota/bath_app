<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('会員一覧') }}
        </h2>
        <x-admin-navi/>
        <div class="p-2 w-full flex justify-around mt-6">
            <button type="button" onclick="location.href='{{route('admin.bath.show', ['id' => $bathId])}}' " class="bg-gray-100 border-0 py-2 px-8 focus:outline-none hover:bg-gray-300 rounded text-lg">施設詳細</button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(count($users) > 0)
                        <ul>
                            @foreach ($users as $user)
                                <li>{{ $user->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>カートに入れたユーザーはいません。</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
