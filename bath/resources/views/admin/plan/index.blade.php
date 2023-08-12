<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('プラン一覧') }}
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
                    <div class="flex justify-end">
                        <button onclick="location.href='{{route('admin.plan.create')}}'" class="text-white bg-yellow-400 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-500 rounded text-lg">プラン新規登録</button>
                    </div>
                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">プラン名</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">料金</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($myPlans as $plan)
                                <tr>
                                <td class="px-4 py-3">{{ $plan->name }}</td>
                                <td class="px-4 py-3">{{ $plan->price }}</td>
                                <td class="px-4 py-3">
                                    <button onclick="location.href='{{ route('admin.plan.edit', ['plan' => $plan->id]) }}'" class="text-white bg-yellow-500 border-0 py-2 px-3 focus:outline-none hover:bg-yellow-600 rounded">編集</button>
                                    <form method="POST">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <td class="px-4 py-3">
                                            <a class="text-white bg-red-300 border-0 py-2 px-3 focus:outline-none hover:bg-red-600 rounded">
                                                <input type="submit" value="削除" formaction="/admin/plan/{{$plan->id}}">
                                            </a>
                                        </td>
                                    </form>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if(session('message'))
                        <div class="alert alert-success text-red-500">
                            {{ session('message') }}
                        </div>
                        @elseif (session('success'))
                            <div class="alert alert-success text-blue-500">
                                {{ session('success') }}
                            </div>
                        @elseif (session('edit'))
                            <div class="alert alert-success">
                                {{ session('edit') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
