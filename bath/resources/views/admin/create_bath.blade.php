<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>初期設定：温泉施設を作成</h1>
    <form method="POST" action="{{ route('admin.create_bath') }}" enctype="multipart/form-data">
        @csrf
        <div class="-m-2">
            <div class="p-2 w-1/22 mx-auto">
                <div class="relative">
                    <label for="name" class="leading-7 text-sm text-gray-600">施設名 ※必須</label>
                    <input type="text" id="name" name="name" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <div class="p-2 w-1/22 mx-auto">
                <div class="relative">
                    <label for="information" class="leading-7 text-sm text-gray-600">施設情報 ※必須</label>
                    <textarea id="information" name="information" rows="10" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
                </div>
            </div>
            <div class="p-2 w-1/22 mx-auto">
                <div class="relative">
                    <label for="address" class="leading-7 text-sm text-gray-600">施設住所 ※必須</label>
                    <input type="address" id="address" name="address" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <div class="p-2 w-1/22 mx-auto">
                <div class="relative">
                    <label for="address" class="leading-7 text-sm text-gray-600">都道府県選択 ※必須</label><br>
                    <select name="category" class="lg:mb-0 lg:mr-1">
                        @foreach ($categories as $category)
                            <option label="{{ $category->name }}">{{ $category->id }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="p-2 w-1/22 mx-auto">
                <div class="relative">
                    <label for="image" class="leading-7 text-sm text-gray-600">画像</label>
                    <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/jpg" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <div class="p-2 w-1/22 mx-auto">
                <div class="relative">
                    <div class="w-32">
                        @if(empty($baths->image))
                        <img src="{{ asset('images/no_image.jpg')}}">
                        @else
                        <img src="{{ asset('public/images/' . $baths->image)}}">
                        @endif
                    </div>
                </div>
            </div>
            <div class="p-2 w-full flex justify-around mt-6">
                <button type="submit" class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">作成</button>
            </div>
        </div>
    </form>
</body>
</html>
