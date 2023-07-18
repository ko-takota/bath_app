@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html class="h-full" lang="en">
<head class="h-full">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        <img src="{{ asset('images/top2.jpg')}}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
    <div class="text-center">
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="max-w-lg mx-auto flex flex-col gap-y-6">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-bold tracking-tight text-brack sm:text-6xl whitespace-nowrap dark:text-gray-500">マイバース</h2>
                <p class="mt-6 text-lg leading-8 text-gray-900">サブタイトル</p>
            </div>
            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <div class="max-w-lg mx-auto flex flex-col gap-y-6">
                    <a href="{{ route('user.top') }}" class="py-4 px-6 inline-flex justify-center items-center gap-2 rounded-md border font-semibold bg-white text-gray-700 align-middle hover:bg-opacity-100 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all text-base dark:bg-opacity-60 dark:text-gray-500 h-20">
                        <button>トップ</button></a>
                    <a href="{{ route('user.item') }}" class="py-4 px-6 inline-flex justify-center items-center gap-2 rounded-md border font-semibold bg-white text-gray-700 align-middle hover:bg-opacity-100 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all text-base dark:bg-opacity-60 dark:text-gray-500 h-20">
                        <button>見つける</button></a>
                    <a href="{{ route('user.index', ['id' => $user_id]) }}" class="py-4 px-6 inline-flex justify-center items-center gap-2 rounded-md border font-semibold bg-white text-gray-700 align-middle hover:bg-opacity-100 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all text-base dark:bg-opacity-60 dark:text-gray-500 h-20">
                        <button>マイページ</button></a>
                    <a href="" class="py-4 px-6 inline-flex justify-center items-center gap-2 rounded-md border font-semibold bg-white text-gray-700 align-middle hover:bg-opacity-100 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-600 transition-all text-base dark:bg-opacity-60 dark:text-gray-500 h-20">
                        <button>使い方</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
