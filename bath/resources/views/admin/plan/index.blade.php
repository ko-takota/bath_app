<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('プラン一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>
                        <a href="/admin/plan/create">
                        <button class="hover:underline hover:bg-slate-500">プラン作成</button>
                        </a>
                    </p>
                    <form method="POST">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                        @foreach($plans as $plan)
                                <p>
                                    <a href="/admin/plan/{{$plan->id}}" class="hover:underline">
                                        プラン名：{{$plan->name}}：{{$plan->price}}円
                                    </a><br/>
                                    <a class="hover:bg-red-500">
                                        <input type="submit" value="削除" formaction="/admin/plan/{{$plan->id}}">
                                    </a>
                                </p>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
