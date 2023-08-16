@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

@include('common.footer')
<header class="text-gray-900 bg-yellow-700 body-font" style="position: sticky; top: 0; z-index: 100;">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="http://127.0.0.1:8000/#:~:text=%E3%81%A1%E3%82%83%E3%81%84%E3%81%BE%E3%81%99%EF%BC%81-,%E6%B8%A9%E6%B3%89%E3%81%AE%E6%96%B0%E7%9D%80%E6%83%85%E5%A0%B1,-ll" class="mr-5 hover:text-white">お知らせ</a>
            <a href="http://127.0.0.1:8000/#:~:text=kakuninn-,%E5%8F%A3%E3%82%B3%E3%83%9F,-%E5%8F%A3%E3%82%B3%E3%83%9F%E3%81%AF%E3%81%82%E3%82%8A%E3%81%BE" class="mr-5 hover:text-white">口コミ</a>
            <a href="http://127.0.0.1:8000/#:~:text=~-,%E6%B8%A9%E6%B3%89%E3%81%AE%E9%AD%85%E5%8A%9B,-~" class="mr-5 hover:text-white">魅力</a>
            <a href="/register" class="mr-5 hover:text-white">会員登録</a>
            <a href="/contact" class="mr-5 hover:text-white">お問い合わせ</a>
        </nav>
        <a href="http://127.0.0.1:8000/#:~:text=%E3%82%82%E7%B9%8B%E3%81%8C%E3%82%8A%E3%81%BE%E3%81%99%E3%80%82-,%E3%83%9E%E3%83%83%E3%83%81%E3%83%B3%E3%82%B0%E3%82%BB%E3%83%B3%E3%83%88%E3%83%BC%E3%81%A3%E3%81%A6%E4%BD%95%EF%BC%9F%EF%BC%9F,-%E5%85%A5%E3%82%8C%E3%81%B0%E5%85%A5%E3%82%8B">
            <h1 class="sm:text-3xl text-2xl font-medium title-font" style="background-image: linear-gradient(to bottom, #f75234, #f8d28b);">バスクリプション</h1>
        </a>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-400 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="{{ route('user.search') }}">検索</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
</header>

<div class="relative">
    <img src="{{ asset('images/24120406.jpg')}}" alt="" class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center" style="filter: blur(5px); max-width: 100%;">
    <div class="container px-5 py-6 mx-auto relative z-10">
        <div class="container px-5 py-6 mx-auto">
            <body class="relative isolate bg-gray-300 py-20 sm:py-1">
                <section class="text-gray-600 body-font">
                    <div class="hdg-top-b-wrap">
                        <h2 class="text-lg hdg-top-b">
                            <div class=" flex-container" style="display: flex; justify-content: center;">
                            <x-bath-logo/>あなたにピッタリな温泉へ行こう！<x-bath-logo/>
                            </div>
                        </h2>
                    </div>
                    <div class="container px-5 py-24 mx-auto flex flex-col">
                        <div class="lg:w-11/12 mx-auto">
                            <div class="relative rounded-lg h-94 overflow-hidden">
                                <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('images/23932881.jpg') }}">
                                <div class="absolute inset-0 flex items-center justify-center bg-opacity-20 bg-black">
                                    <h1 class="text-4xl font-bold text-white z-10">温泉サブスク</h1>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row mt-10">
                            <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                                <div class="w-20 h-20 rounded-full inline-flex items-center justify-center">
                                </div>
                                <div class="flex flex-col items-center text-center justify-center">
                                    <a href="{{ route('user.search')}}">
                                        <h2 class="hover:bg-gray-200 font-medium title-font mt-4 text-gray-900 text-lg  border border-gray-900 p-6 rounded-lg">検索
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 transform transition-transform hover:scale-150">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                        </svg>
                                        </h2>
                                    </a>
                                </div>
                            </div>
                            <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 mb-4 pt-4 sm:mt-0 text-center sm:text-left">
                                <p class="leading-relaxed text-lg mb-6">
                                    温泉は古くから医療目的で使われていた！？
                                </p><br>
                                <p class="mb-12 text-left">
                                    泉質によって成分も違ってきますが、ガスやイオンなどの成分が皮膚を通して体の中に吸収されることで、
                                    <br>血のめぐりが良くなったり、代謝が良くなったりします。

                                    <br>毎日温泉に入ることでアトピーやヘルニアなどの<span class="text-red-500">治療効果が期待</span>できます。
                                    <br>調べてもらえればわかることですが、温泉に入ることで得られる効果は絶大です。
                                    <br>また、リラックス効果もありいつもの家のお風呂とは違う「非日常空間」が心のリラックスにも繋がります。
                                </p>
                                <div class="mt-6 text-lg text-yellow-800">
                                    <div class="hover:text-2xl hover:bg-yellow-400 text-xl">
                                        <p class="inline-flex items-center" style="text-decoration: underline;">
                                            バスクリプションって何？？
                                        </p>
                                        <p class="text-red-900">入れば入るほどお得！受付で券を買う必要なし！温泉入り放題です！</p>
                                    </div>
                                    <p class="mt-12 text-yellow-800">近年流行している整えるサウナ。ただ熱いから長く入れない。ととのいがわからない！<br>てか、温泉に行けばサウナある！
                                        <br>温泉もいいけど券買うのめんどい、タオル忘れた...毎日行けば身体も回復するけどお金もかかる...
                                        <br>
                                        <br>バスクリプションで自分にあった温泉施設を見つければ、定額料金で好きな時に好きな時間入れちゃいます！
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </body>
            {{-- 施設お知らせ --}}
            <section class="text-gray-600 body-font">
                <h1 class="title-font text-xl font-medium text-center text-gray-900 mb-3"><span class="text-lg" style="text-decoration: underline; font-size: 40px;">温泉の新着情報</span></h1>
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -mx-4 -my-8">
                        <div class="py-8 px-4 overflow-x-auto">
                            <div class="h-full flex items-start">
                                <div class="relative w-full h-full">
                                    <div class="max-w-screen-xl mx-auto relative flex justify-start p-6 bg-opacity-75">
                                        @if (count($posts) > 0)
                                            @foreach ($posts->take(20)->sortByDesc('created_at') as $post)
                                                <div class="flex-shrink-0 w-72 bg-yellow-400 shadow-md p-4 rounded-lg m-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                                    </svg>
                                                    <h1 class="title-font text-xl font-medium text-gray-900 mb-3">{{ $post->title }}</h1>
                                                    <p class="font-medium text-gray-900 mb-3">{{ Str::limit($post->body, 25) }}</p>
                                                    <p class="leading-relaxed mb-5">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                                                    <a href="{{ route('user.item.show', ['item' => $post->bath_id ])}}" class="inline-flex items-center">
                                                        <span class="flex-grow flex flex-col pl-3">
                                                            <span class="title-font text-sm font-medium hover:text-gray-900 text-gray-400">{{ $post->bath_name }}</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="text-center w-48 bg-yellow-100 shadow-md p-4 rounded-lg m-2">
                                                <p>新着情報はありません</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- みんなの口コミ --}}
            <h1 class="title-font text-xl font-medium text-center text-gray-900 mb-3"><span class="text-lg" style="text-decoration: underline; font-size: 40px;">口コミ</span></h1>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -mx-4 -my-8">
                        <div class="py-8 px-4 overflow-x-auto">
                            <div class="max-w-screen-xl mx-auto relative flex justify-start p-6 bg-opacity-75">
                                @if (count($userPosts) > 0)
                                    @foreach ($userPosts->take(10)->sortByDesc('created_at') as $userPost)
                                        <div class="flex-shrink-0 w-72 bg-yellow-100 shadow-md p-4 rounded-lg m-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                            </svg>
                                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">みんなの口コミ</h1>
                                            <p class=" font-medium text-gray-900 mb-3">{{ Str::limit($userPost->body, 25) }}</p>
                                            <p class="leading-relaxed mb-5">{{ Carbon\Carbon::parse($userPost->created_at)->diffForHumans() }}</p>
                                            <span class="flex-grow flex flex-col pl-3">
                                                <span class="title-font font-medium text-gray-900">{{ $userPost->name }}</span>
                                            </span>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="text-center w-48 bg-yellow-100 shadow-md p-4 rounded-lg m-2">
                                        <p>口コミはありません</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="温泉の魅力">
                <h1 class="title-font text-xl font-medium text-center text-gray-900 mb-12 mt-24"><span class="text-lg" style="text-decoration: underline; font-size: 40px;">~温泉の魅力~</span></h1>
                <div class="flex-center" style="align-items: center;">
                    <ul >
                        <div class="sm:flex bg-yellow-700 " style="opacity: 0.9;">
                            <div class="sm:w-1/2">
                                <li class="flex-shrink-0 w-72 shadow-md p-4 rounded-lg m-2" style="text-align: center; width: 100%; box-sizing: border-box;">
                                    <p class="text-lg p-4" style="font-weight: bold;">温泉時間を有効に</p>
                                    <div style="display: flex; flex-direction: column; align-items: center;">
                                        <img src="{{ asset('images/22240338_s.jpg')}}" alt="温泉時間を有効に" style="width: 500%; height: 300%; margin: 0 auto;">
                                        <p class="--txt bg-yellow-600">
                                            長く温泉に入っている時間はスマホを見ることもなく、リラックスできる時間です。
                                            <br>マッサージしたり筋肉をほぐしたりしながら、自分のカラダとゆっくり向き合える時間にしよう。
                                        </p>
                                    </div>
                                </li>
                                <li class="flex-shrink-0 w-72 shadow-md p-4 rounded-lg m-2" style="text-align: center; width: 100%; box-sizing: border-box;">
                                    <p class="text-lg p-4" style="font-weight: bold;">風呂上がりはとにかく気持ちいい</p>
                                    <div style="display: flex; flex-direction: column; align-items: center;">
                                        <img src="{{ asset('images/26929681_s.jpg')}}" alt="ビール" style="width: 500%; height: 300%; margin: 0 auto;">
                                        <p class="--txt bg-yellow-600">
                                            風呂上がりのドリンクは家ではなかなか味わえない高揚感も魅力。<br>皆さんも一度この高揚感を味わってみては？
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <div class="sm:w-1/2">
                                <li class="flex-shrink-0 w-72 shadow-md p-4 rounded-lg m-2" style="text-align: center; width: 100%; box-sizing: border-box;">
                                    <p class="text-lg p-4" style="font-weight: bold;">家族や友人と行こう</p>
                                    <div style="display: flex; flex-direction: column; align-items: center;">
                                        <img class="w150" src="{{ asset('images/22272423_s.jpg')}}" alt="家族で行こう" style="width: 500%; height: 300%; margin: 0 auto;">
                                        <p class="--txt bg-yellow-600">
                                            家では一人でしか入浴できないけど温泉に行けば、家族や友人との時間が作れる。会話も弾む！
                                        </p>
                                    </div>
                                </li>
                                <li class="flex-shrink-0 w-72 shadow-md p-4 rounded-lg m-2" style="text-align: center; width: 100%; box-sizing: border-box;">
                                    <p class="text-lg p-4" style="font-weight: bold;">温泉の効果</p>
                                    <div style="display: flex; flex-direction: column; align-items: center;">
                                        <img src="{{ asset('images/bath-0058781eqg.jpg')}}" alt="温泉の効果" style="width: 500%; height: 200%; margin: 0 auto;">
                                        <p class="--txt bg-yellow-600">
                                            汗をかくことで、カラダに溜まった老廃物の排出を促進し、毛穴の皮脂を取り除くため美肌効果も期待できます。
                                            <br>また、代謝が上がることで、睡眠の質や、冷え性の改善にも期待できるという声も。
                                        </p>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </ul>
                </div>
            </section>



            <section class="text-white py-24 mt-12">
                <div class="container px-5 py-8 mx-auto flex items-center flex-col" style="background-image: linear-gradient(to bottom, #f6cb7a, #FF6347);">
                    <div class="text-center">
                        <h1 class="mb-6 text-lg flex title-font font-medium items-center md:justify-start justify-center">
                            START
                        </h1>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                    </svg>
                    <p class="text-sm mb-6 mt-4">
                        バスクリプション
                    </p>
                    <h1 class="text-lg mb-2">
                        会員登録のご案内はこちら
                    </h1>
                    <a href="/register" rel="noopener noreferrer" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-16 h-16 transform transition-transform hover:scale-150">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                    </a>
                </div>
            </section>
        </div>
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a href="{{ route('admin.register')}}" class="text-gray-500 text-sm justify-center">施設運営管理者はこちら
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                </svg>
            </a>
        </div>
    </div>
</div>

