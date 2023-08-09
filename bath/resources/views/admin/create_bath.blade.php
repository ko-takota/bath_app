@vite(['resources/css/app.css', 'resources/js/app.js'])



<section class="text-gray-600 body-font">
    <div class="relative">
        <img src="{{ asset('images/24177390.jpg')}}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center" style="filter: blur(9px);">
        <div class="container px-5 py-24 mx-auto relative z-10">
                <div class="mt-7 hover:bg-gray-400 bg-gray-200 rounded-lg" style="position: absolute; top: 10px; right: 100px;">
                    <a href="{{ route('admin.bath.index', ['id' => $bath]) }}">一旦戻る</a>
                </div>
            <form method="POST" action="{{ route('admin.create_bath') }}" enctype="multipart/form-data">
                @csrf
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">温泉施設の作成</h1>
                    </div>
                    <div class="flex lg:w-2/3 text-center w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="name" class="leading-7 text-lg text-gray-900">施設名 ※必須</label>
                            <input type="text" id="name" name="name" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="category" class="leading-7 text-lg text-gray-600">都道府県選択 ※必須</label><br>
                            <select name="category" class="lg:mb-0 lg:mr-1">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="information" class="leading-7 text-lg text-gray-600">施設情報 ※必須　　<span>（施設の強みを書くことでお客様がより魅力を感じます。）</span></label>
                            <textarea id="information" name="information" rows="10" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                    </div>
                </div>
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="address" class="leading-7 text-lg text-gray-600">施設住所 ※必須</label>
                            <input type="address" id="address" name="address" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="p-2 w-1/22 mx-auto">
                            <div class="relative">
                                <label for="image" class="leading-7 text-lg text-gray-600">画像</label>
                                <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/jpg" class="bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/22 mx-auto">
                            <div class="relative">
                                <div class="w-32">
                                    @if(empty($baths->image))
                                        <img src="{{ asset('images/no_image.jpg')}}" class="object-cover object-center rounded-lg">
                                    @else
                                        <img src="{{ asset('public/images/' . $baths->image)}}" class="object-cover object-center rounded-lg">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 w-full flex justify-around mt-6">
                    <button onclick="location.href='{{ route('admin.bath.show', ['id' => $bath]) }}' " type="submit" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">作成</button>
                </div>
            </form>
        </div>
    </div>
</section>
