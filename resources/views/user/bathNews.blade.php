@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

@include('common.footer')

<div class="relative">
    <x-top-header/>
    <section class="text-gray-600 body-font relative">
        <div class="container h-full w-full px-5 py-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="text-4xl font-medium p-3 title-font mb-6 text-gray-900">運営からのお知らせ</h1>
                    <div class="flex">
                        <button id="important-button" class="mx-auto leading-relaxed text-base hover:bg-red-500 hover:text-white highlighted-button-red">重要なお知らせ</button>
                        <button id="other-button" class="mx-auto leading-relaxed text-base hover:bg-red-500 hover:text-white">その他</button>
                    </div>
                </div>   
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        let importantButton = document.getElementById('important-button');
                        let otherButton = document.getElementById('other-button');
                        let importantList = document.getElementById('important-list');
                        let otherList = document.getElementById('other-list');
                
                        importantButton.addEventListener('click', function() {
                            // 重要なお知らせのボタンがクリックされたときの処理
                            importantList.style.display = 'block';
                            otherList.style.display = 'none';
                        });
                
                        otherButton.addEventListener('click', function() {
                            // その他のお知らせのボタンがクリックされたときの処理
                            importantList.style.display = 'none';
                            otherList.style.display = 'block';
                        });
                    });
                </script>
                <div class="bg-gray-300">
                    <section class="mx-auto max-w-xl">
                        <ul id="important-list" class="flex-wrap -m-2 bg-white" style="display: none;">
                            @foreach ($importantNews as $news)
                            <li class="border p-8">
                                <a href="{{ route('user.bath_news_content', ['id' => $news->id]) }}">
                                    <span>{{$news->title}}</span><br>
                                    <span>公開日{{$news->created_at->format('Y/m/d')}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <ul id="other-list" class="flex-wrap -m-2 bg-white" style="display: none;">
                            @foreach ($otherNews as $news)
                            <li class="border p-8">
                                <a href="{{ route('user.bath_news_content', ['id' => $news->id]) }}">
                                    <span>{{$news->title}}</span><br>
                                    <span>公開日{{$news->created_at->format('Y/m/d')}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>

    