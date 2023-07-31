@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- @include('common.sidebar')
@include('common.header') --}}
@section('content') {{-- メイン部分作成 --}}

@include('common.footer')
<body class="relative isolate bg-gray-300 py-20 sm:py-1">
    <section class="text-gray-600 body-font">
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
                  <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">マッチングセントー</h2>
                  <div class="w-12 h-1 bg-yellow-500 rounded mt-2 mb-4"></div>
                    <a href="{{ route('user.search')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </a>
                </div>
              </div>
              <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                <p class="leading-relaxed text-lg mb-4">マッチングセントーの解説</p>
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

      {{-- ニュース --}}
      <h1 class="title-font text-xl font-medium text-center text-gray-900 mb-3"><span class="text-lg" style="text-decoration: underline; font-size: 40px;">お知らせ</span></h1>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -mx-4 -my-8">
                <div class="py-8 px-4 lg:w-1/3">
                    <div class="h-full flex items-start">
                        {{-- @foreach ( as )

                        @endforeach で管理者からのお知らせを表示 --}}
                        <div class="flex-grow pl-6">
                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">管理者からお知らせ</h1>
                            <p class="leading-relaxed mb-5">お知らせ内容</p>
                            <a class="inline-flex items-center">
                                <img alt="blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-3">
                                <span class="title-font font-medium text-gray-900">施設名</span>
                                </span>
                            </a>
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
                <div class="py-8 px-4 lg:w-1/3">
                    <div class="h-full flex items-start">
                        {{-- @foreach ( as )

                        @endforeach で管理者からの口コミを表示 --}}
                        <div class="flex-grow pl-6">
                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">ユーザーの口コミ</h1>
                            <p class="leading-relaxed mb-5">口コミ内容</p>
                            <a class="inline-flex items-center">
                                <img alt="blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-3">
                                    <span class="title-font font-medium text-gray-900">施設名</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>



    <section class="text-gray-600 body-font">
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
</body>
</html>
