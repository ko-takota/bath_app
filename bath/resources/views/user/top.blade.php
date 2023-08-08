@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- @include('common.sidebar')
@include('common.header') --}}
{{-- @section('content') メイン部分作成 --}}

@include('common.footer')
<div class="relative">
    <img src="{{ asset('images/24120406.jpg')}}" alt="" class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center" style="filter: blur(5px); max-width: 100%;">
    <div class="absolute inset-0 z-10 opacity-40"></div>
    <div class="container px-5 py-24 mx-auto relative z-10">
        <div class="flex flex-wrap w-full flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font">マッチングセントー</h1>
        </div>
        <div class="container px-5 py-24 mx-auto">
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
                        <div class="rounded-lg h-94 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('images/23932881.jpg') }}" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
                        </div>
                        <div class="flex flex-col sm:flex-row mt-10">
                        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                            <div class="w-20 h-20 rounded-full inline-flex items-center justify-center">
                            </div>
                            <div class="flex flex-col items-center text-center justify-center">
                                <a href="{{ route('user.search')}}">
                                    <h2 class="hover:bg-gray-200 font-medium title-font mt-4 text-gray-900 text-lg  border border-gray-900 p-6 rounded-lg">検索
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                    </h2>
                                </a>
                            </div>
                        </div>
                        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                            <p class="leading-relaxed text-lg mb-4">古くから医療目的で温泉が使われていた！？</p><br>
                            <p class="mb-6 text-left">泉質によって成分も違ってきますが、ガスやイオンなどの成分が皮膚を通して体の中に吸収されることで、
                                <br>血のめぐりが良くなったり、代謝が良くなったりします。

                                <br>毎日温泉に入ることでアトピーやヘルニアなどの<span class="text-red-500">治療効果が期待</span>できます。
                                <br>調べてもらえればわかることですが、温泉に入ることで得られる効果は絶大です。
                                <br>また、リラックス効果もありいつもの家のお風呂とは違う「非日常空間」が心のリラックスにも繋がります。</p>
                            <div class="text-lg hover:bg-yellow-400 text-yellow-800">
                                <p class="mt-4 inline-flex items-center">マッチングセントーって何？？</p>

                                <p class="mt-6 text-yellow-800">近年流行している整えるサウナ。ただ熱いから長く入れない。ととのいがわからない！
                                    <br>温泉もいいけど券買うのめんどい、タオル忘れた...毎日行けば身体も回復するけどお金もかかる...
                                    <br><span class="text-red-900">マッチングセントーで自分にあった温泉施設を見つければ、定額料金で好きな時に好きな時間入れちゃいます！</span>
                                </p>
                            </div>
                            </dl>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>
            </body>
            {{-- ニュース --}}
            <h1 class="title-font text-xl font-medium text-center text-gray-900 mb-3"><span class="text-lg" style="text-decoration: underline; font-size: 40px;">施設からのお知らせ</span></h1>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -mx-4 -my-8">
                        <div class="py-8 px-4 lg:w-1/3">
                            <div class="h-full flex items-start">
                                @foreach ($posts->take(5)->sortByDesc('created_at') as $post)
                                    <div class="flex-grow pl-6">
                                        <h1 class="title-font text-xl font-medium text-gray-900 mb-3">{{ $post->title }}</h1>
                                        <p class=" font-medium text-gray-900 mb-3">{{ Str::limit($post->body, 25) }}</p>
                                        <p class="leading-relaxed mb-5">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                                        <a class="inline-flex items-center">
                                            <span class="flex-grow flex flex-col pl-3">
                                            <span class="title-font font-medium text-gray-900">{{ $post->admin_name}}</span>
                                            </span>
                                        </a>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                        </svg>
                                    </div>
                                @endforeach
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
                        <div class="py-8 px-4 lg:w-1/3">
                            <div class="h-full flex items-start">
                                @foreach ($userPosts->take(5)->sortByDesc('created_at') as $userPost)
                                    <div class="flex-grow pl-6">
                                        <h1 class="title-font text-xl font-medium text-gray-900 mb-3">みんなの口コミ</h1>
                                        <p class=" font-medium text-gray-900 mb-3">{{ Str::limit($userPost->body, 25) }}</p>
                                        <p class="leading-relaxed mb-5">{{ Carbon\Carbon::parse($userPost->created_at)->diffForHumans() }}</p>
                                        <span class="flex-grow flex flex-col pl-3">
                                            <span class="title-font font-medium text-gray-900">{{ $userPost->name }}</span>
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                        </svg>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="温泉の魅力">
                <h3 class="text-lg hdg-top-b" style="position: relative;">
                    <div class=" flex-container" style="display: flex; justify-content: center;">
                        <img class="" src="{{ asset('images/24149431.jpg')}}" alt="温泉の魅力" style="width: 200px; height: auto; opacity: 0.5;">
                        <p class="--txt" style="position: absolute; top: 10%; left: 50%; transform: translate(-50%, -50%); padding: 10px; border-radius: 5px;">
                        温泉の魅力
                        </p>
                    </div>
                </h3>
                <ul class="--flex charm fadeUpTrigger bg-yellow-300 blur-background" style="display: flex; align-items: center; ">
                        <li style="text-align: center; width: 100%; box-sizing: border-box;">
                            <h4>家族で行こう</h4>
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <img class="w150" src="{{ asset('images/24076953.jpg')}}" alt="家族で行こう" style="width: 200px; height: auto; opacity: 0.7; margin: 0 auto;">
                                <p class="--txt">
                                    家ではなかなか家族で入浴できることがないけど温泉に行けば、家族との時間が作れる。会話も弾む！
                                </p>
                            </div>
                        </li>
                        <li style="text-align: center; width: 100%; box-sizing: border-box;">
                            <h4>温泉の効果</h4>
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <img src="{{ asset('images/22084964.jpg')}}" alt="温泉の効果" style="width: 200px; height: auto; opacity: 0.7; margin: 0 auto;">
                                <p class="--txt">
                                    汗をかくことで、カラダに溜まった老廃物の排出を促進し、毛穴の皮脂を取り除くため美肌効果も期待できます。
                                    また、代謝が上がることで、睡眠の質や、冷え性の改善にも期待できるという声も。
                                </p>
                            </div>
                        </li>
                        <li style="text-align: center; width: 100%; box-sizing: border-box;">
                            <h4>温泉時間を有効に</h4>
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <img src="{{ asset('images/24028599.jpg')}}" alt="温泉時間を有効に" style="width: 200px; height: auto; opacity: 0.7; margin: 0 auto;">
                                <p class="--txt">
                                    長く温泉に入っている時間はスマホを見ることもなく、リラックスできる時間です。マッサージしたり筋肉をほぐしたりしながら、自分のカラダとゆっくり向き合える時間にしよう。
                                </p>
                            </div>
                        </li>
                        <li style="text-align: center; width: 100%; box-sizing: border-box;">
                            <h4>風呂上がりはとにかく気持ちいい</h4>
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <img src="{{ asset('images/1471101.jpg')}}" alt="ビール" style="width: 200px; height: auto; opacity: 0.7; margin: 0 auto;">
                                <p class="--txt">
                                    風呂上がりのドリンクは家ではなかなか味わえない高揚感も魅力。皆さんも一度この高揚感を味わってみては？
                                </p>
                            </div>
                        </li>
                </ul>

                <div class="container px-5 py-24 mx-auto flex flex-col">
                <div class="lg:w-4/6 mx-auto">
                    <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('images/1181936.jpg') }}">
                    </div>
                    <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center">
                        <p class="leading-relaxed text-lg mb-4">Meggings portland fingerstache lyft, post-ironic fixie man bun banh mi umami everyday carry hexagon locavore direct trade art party. Locavore small batch listicle gastropub farm-to-table lumbersexual salvia messenger bag. Coloring book flannel truffaut craft beer drinking vinegar sartorial, disrupt fashion axe normcore meh butcher. Portland 90's scenester vexillologist forage post-ironic asymmetrical, chartreuse disrupt butcher paleo intelligentsia pabst before they sold out four loko. 3 wolf moon brooklyn.</p>
                        <a class="text-yellow-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                        </a>
                    </div>
                    </div>
                </div>
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

