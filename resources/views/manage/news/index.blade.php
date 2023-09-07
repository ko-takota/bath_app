<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('お知らせ一覧') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-end">
                        <button onclick="location.href='{{route('manage.news.create')}}'" class="text-white bg-yellow-400 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-500 rounded text-lg">新規投稿</button>
                    </div>
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">タイトル</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">カテゴリー</th>
                                    <th class="bg-gray-100"></th>
                                    <th class="bg-gray-100"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $news)
                                <tr>
                                    <td class="px-4 py-3 text-center"><span class="text-xl bg-green-300">{{ $news->title }}</span></td>
                                        @if($news->category === 0)
                                            <td class="text-center">重要なお知らせ</td>
                                        @else
                                            <td class="text-center">その他</td>
                                        @endif
                                    <td class="px-4 py-3">
                                        <button onclick="location.href='{{ route('manage.news.edit', ['id' => $news->id]) }}'" class="text-white bg-blue-500 border-0 py-2 px-3 focus:outline-none hover:bg-blue-600 rounded">編集</button>
                                    </td>
                                    <td class="px-4 py-3">
                                        <form method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-white bg-red-300 border-0 py-2 px-3 focus:outline-none hover:bg-red-600 rounded">
                                                <input type="submit" value="削除" formaction="delete/{{$news->id}}">
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>
                        @if(session('message'))
                            <div class="alert alert-success text-red-500">
                                {{ session('message') }}
                            </div>
                        @elseif (session('success'))
                            <div class="alert alert-success text-blue-500">
                                {{ session('success') }}
                            </div>
                        @endif
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
