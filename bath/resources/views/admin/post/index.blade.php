@extends('layouts.common')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('お知らせ一覧') }}
        </h2>
        <x-admin-navi/>
        <div class="p-2 w-full flex justify-around mt-6">
            <button type="button" onclick="location.href='{{route('admin.bath.show', ['id' => $bathId])}}' " class="bg-gray-100 border-0 py-2 px-8 focus:outline-none hover:bg-gray-300 rounded text-lg">施設詳細</button>
        </div>
    </x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="flex justify-end">
                    <button onclick="location.href='{{route('admin.post.create')}}'" class="text-white bg-yellow-400 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-500 rounded text-lg">新規投稿</button>
                </div>
                <section class="text-gray-600 body-font">
                    <div class="container px-5 mx-auto">
                      <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                          <thead>
                            <tr>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">タイトル</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">施設名</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($posts as $post)
                            <tr>
                              <td class="px-4 py-3">{{ $post->title }}</td>
                              <td class="px-4 py-3">
                                <span class="relative inline-block px-3 py-1 font-semibold text-white leading-tight">
                                    <span aria-hidden="true" class="absolute inset-0 bg-green-500 rounded-full">
                                    </span>
                                    <span class="relative">
                                        @if (isset($post->bath_id))
                                            {{ $post->bath->name }}
                                        @else
                                            施設名がありません。
                                        @endif
                                    </span>
                                </span>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
