<x-guest-layout>
    <h1>新規管理者登録</h1>

    <form method="POST" action="{{ route('admin.register') }}">
        @csrf

        {{-- <a class="flex items-center justify-center text-gray-900 font-bold p-5 mb-4 md:mb-20" href="{{ route('admin.top') }}">
        <span>お気に入り温泉会員登録</span>
        </a> --}}
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('ユーザー名')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワード（再確認用）')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-900 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('admin.login') }}">
                {{ __('すでに登録済みですか？') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('登録する') }}
            </x-primary-button>
        </div>
    </form>
    <h2 class="text-lg text-gray-900 font-medium title-font mb-2 text-center">
        <span class="hover:bg-yellow-600">
            <a href="{{ route('user.top') }}">トップ一覧へ戻る</a>
        </span>
    </h2>
</x-guest-layout>
