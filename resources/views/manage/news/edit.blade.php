<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('お知らせ編集') }}
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center justify-center">
            <div class="lg:w-3/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto md:mr-auto w-full mt-8 md:mt-0">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('manage.news.update',['id' => $news->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="relative mb-4">
                    項目
                    <select name="category">
                        <option value="">選択してください</option>
                        <option value="0">重要なお知らせ</option>
                        <option value="1">その他</option>
                    </select>
                </div>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">タイトル</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $news->title) }}" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="price" class="leading-7 text-sm text-gray-600">内容</label>
                    <textarea id="body" name="body" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ old('body', $news->body) }}</textarea>
                </div>
                <div class="p-2 w-full flex justify-around mt-6">
                    <button type="button" onclick="location.href='{{route('manage.news.index')}}' " class="bg-gray-100 border-0 py-2 px-8 focus:outline-none hover:bg-gray-300 rounded text-lg">戻る</button>
                    <button type="submit" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">更新</button>
                </div>
            </form>
          </div>
        </div>
    </section>
</x-app-layout>
