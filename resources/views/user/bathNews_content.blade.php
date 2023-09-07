@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

@include('common.footer')

<div class="relative">
    <x-top-header/>
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-6">
                <h1 class="text-4xl font-medium p-3 title-font mb-6 text-gray-900">運営からのお知らせ</h1>
            </div>
            <section class="p-20 m-20 bg-gray-300">
                <div class="p-20 m-20 bg-white">
                    <article>
                        <h2 class="text-lg font-bold text-center">{{ $news->title }}</h2>
                        <hr>
                        <p class="text-right text-xs">公開日：{{ $news->created_at->format('Y/m/d') }}</p>
                        <div>
                            <p>
                                {{ $news->body }}
                            </p>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </section>
</div>