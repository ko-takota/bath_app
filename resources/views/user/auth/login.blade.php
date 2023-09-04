@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-guest-layout>
    <!-- セッション状況 -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <a class="flex items-center justify-center text-gray-900 font-bold md:mb-10" href="{{ route('user.top') }}">
        <span class="text-xl bg-yellow-400">バスクリプションログイン</span>
    </a>

    <form method="POST" action="{{ route('user.login') }}">
        @csrf
        
    <div class="bg-yellow-200">
        <!-- メールアドレス -->
        <div>
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" class="block mt-1 w-full hover:bg-gray-200" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- パスワード -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />
            <x-text-input id="password" class="block mt-1 w-full hover:bg-gray-200" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- ログイン状態を保持 -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-900">{{ __('ログイン状態を保存') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('user.password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-900 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('user.password.request') }}">
                    {{ __('パスワードを忘れた場合はこちら') }}
                </a>
            @endif
            <x-primary-button class="ml-3">
                {{ __('ログイン') }}
            </x-primary-button>
        </div>
    </div>
    <a class="underline text-sm text-gray-600 dark:text-gray-900 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('user.register') }}">
        {{ __('初めての方はこちら') }}
    </a>
    </form>
</x-guest-layout>
