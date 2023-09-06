@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="relative">
    <x-top-header/>
    <img src="{{ asset('images/24120406.jpg')}}" alt="" class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center" style="max-width: 100%;">
    <div class="absolute inset-0 z-10 bg-black-400 opacity-40"></div>
    <div class="container px-5 py-24 mx-auto relative z-10">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2">施設検索</h1>
        </div>
        <div class="container px-5 py-24 mx-auto">
            <form method="GET" action="{{ route('user.search') }}" class="d-flex">
                <div class="lg:flex lg:justify-around">
                    <div class="lg:flex items-center">
                        <select name="category" class="lg:mb-0 lg:mr-1">
                            <option value="0">全て</option>
                            @foreach ($categories as $category)
                                <optgroup class="category-optgroup" label="{{ $category->name }}">
                                    @foreach ($category->prefcture as $prefcture)
                                        <option value="{{ $prefcture->id }}" @if(\Request::get('category') == $prefcture->id) selected @endif>
                                            {{ $prefcture->name }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                        <div class="flex space-x-2 items-center">
                            <div><input name="keyword" class="border border-gray-500 py-2" placeholder="キーワードを入力"></div>
                            <div><button class="ml-auth bg-indigo-500 text-white border-0 py-2 px-6">検索する</button></div>
                        </div>
                    </div>
                </div>
            </form>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto flex justify-center">
                    検索結果{{$counts}}件
                    <div class="-m-12 lg:w-1/2">
                        @if(count($baths) > 0)
                            @foreach ($baths as $bath)
                            <div class="bg-white mt-8 mb-48 border-2 border-gray-900 rounded-lg overflow-hidden">
                                <a href="{{ route('user.item.show', ['item' => $bath->id ]) }}" class="items-center md:mb-2 lg:mb-0">
                                    <img src="{{ asset('storage/baths/' . $bath->image)}}" alt="温泉施設画像">
                                </a>
                                <div class="p-6">
                                    <div class="flex">
                                        <h1 class="title-font text-sm font-medium bg-blue-100 rounded-lg mb-3">{{ $bath->name }}</h1>
                                    </div>
                                    <p class="leading-relaxed mb-3 bg-blue-100 text-gray-800">{{ $bath->address }}</p>
                                    <div class="mt-12 items-center">
                                        <a href="{{ route('user.item.show', ['item' => $bath->id ]) }}" class="text-white bg-blue-500 hover:bg-blue-300 items-center md:mb-2 lg:mb-0">
                                            <span class="text-sm p-2">施設の詳細確認</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                        <p class="mt-8 mb-8 border-2 border-gray-600">検索結果がありませんでした。</p>
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

