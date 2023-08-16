@vite(['resources/css/app.css', 'resources/js/app.js'])

<section>
    <div class="px-6 py-6 mx-auto max-w-3xl sm:px-6 md:px-12 lg:px-24 lg:py-24 border border-gray-700">
        <div class="flex flex-col w-full mb-12 text-center">
            <h1 class="mb-12 max-w-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-2xl lg:text-3xl lg:max-w-4xl">
            管理者｜会員登録完了
            </h1>
        </div>
        <div class="text-center">
            <h2 class="flex mb-12">
                <x-star-icon/> 会員登録ありがとうございます<x-star-icon/>
            </h2>
        </div>

        <p class="max-w-xl mt-2 leading-relaxed text-gray-500">バスクリプション
            <br>管理者｜会員登録が完了し、施設の掲載が可能になりました</div></p>

        <div class="sm:flex p-12">
        <button type="button" onclick="location.href='{{route('admin.bath.index')}}' " class="sm-1/2 mx-auto bg-yellow-200 border-0 mr-24 py-2 px-8 focus:outline-none hover:bg-yellow-400 rounded text-lg">マイページへ</button>
        <button type="button" onclick="location.href='{{route('admin.create_bath')}}' " class="sm:1/2 mx-auto bg-yellow-200 border-0 ml-24 py-2 px-8 focus:outline-none hover:bg-yellow-400 rounded text-lg">施設登録へ</button>
        </div>
      </div>
    </div>
  </section>
