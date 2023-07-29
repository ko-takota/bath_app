<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('オーナー情報編集') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1>オーナー情報編集</h1>
                <form method="POST" action="{{ route('admin.information.update', ['information' => $admin->id]) }}">
                    @method('PUT')
                    @csrf
                        <p>ユーザー名：<input class="px-4 py-3" type="text" name="name" value="{{ $admin->name }}" cols="40"></p>
                        <p>メールアドレス：<input class="px-4 py-3" type="string" name="email" value="{{ $admin->email }}" rows="4" cols="40"></p>
                        <p>パスワード：<input type="password" name="password" rows="4" cols="40"></p>
                        <p>パスワード確認：<input type="password" name="password_confirmation" rows="4" cols="40"></p>
                    {{-- 変更失敗時のメッセージ --}}
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <p><input type="submit" value="更新"></p>
                </form>
                <a href="/admin/information">戻る</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
