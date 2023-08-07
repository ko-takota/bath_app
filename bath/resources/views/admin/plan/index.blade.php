<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('プラン一覧') }}
            <div class="flex justify-end">
                <button onclick="location.href='{{route('admin.plan.create')}}'" class="text-white bg-yellow-400 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-500 rounded text-lg">プラン新規登録</button>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
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
                                            <a class="text-white bg-red-500 border-0 py-2 px-3 focus:outline-none hover:bg-red-600 rounded">
                                                <input type="submit" value="削除" formaction="/admin/plan/{{$plan->id}}">
                                            </a>
                                        </td>
                                    </form>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
