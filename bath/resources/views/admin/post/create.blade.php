<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('新規投稿画面') }}
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center justify-center">
            <div class="lg:w-3/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto md:mr-auto w-full mt-8 md:mt-0">
            <h1 class="text-gray-900 text-lg font-medium title-font mb-5">口コミ作成</h1>
            <form action="{{route('admin.post.store')}}" method="POST">
                @csrf
            <div class="relative mb-4">
              <label for="name" class="leading-7 text-sm text-gray-600">タイトル</label>
              <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="bathName" class="leading-7 text-sm text-gray-600">施設名</label>
              <input type="text" id="bathName" name="bathName" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="body" class="leading-7 text-sm text-gray-600">内容</label>
                <textarea  id="body" name="body" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
              </div>
              <div class="p-2 w-full flex justify-around mt-6">
                <button type="button" onclick="location.href='{{route('admin.post.index', ['id' => $admin->id])}}' " class="bg-gray-100 border-0 py-2 px-8 focus:outline-none hover:bg-gray-300 rounded text-lg">戻る</button>
                <button type="submit" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">投稿</button>
            </div>
            </form>
          </div>
        </div>
    </section>
</x-app-layout>
