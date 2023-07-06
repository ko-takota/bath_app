@section('sidebar')
<!-- component -->
<div class="dark:bg-slate-400 w-screen h-screen pattern">
    <nav class="z-20 flex shrink-0 grow-0 justify-around gap-5 border-t border-gray-200 bg-white/50 p-2.5 shadow-lg backdrop-blur-lg dark:border-slate-600/60 dark:bg-slate-100/50 fixed top-1/4 -translate-y-1/4 left-9 min-h-[auto] min-w-[64px] flex-col rounded-lg border">
        <div class="pt-3 pl-3"><br>{{ Auth::user()->name }}</div>
    <a href="#profile"
        class="flex aspect-square min-h-[32px] w-16 flex-col items-center justify-center gap-1 rounded-md p-1.5 bg-indigo-50 text-indigo-600 dark:bg-sky-600 dark:text-sky-50">
        <!-- HeroIcon - User -->
        <small class="text-center text-xs font-medium"> マイ風呂 </small>
    </a>

    <a href="#settings"
        class="flex aspect-square min-h-[32px] w-16 flex-col items-center justify-center gap-1 rounded-md p-1.5 text-gray-700 hover:bg-gray-100 dark:text-gray-900 dark:hover:bg-slate-600">
    <!-- HeroIcon - Cog-6-tooth -->
        <small class="text-center text-xs font-medium"> 投稿 </small>
    </a>

    <hr class="dark:border-gray-700/60" />

    <a href="{{ route('top') }}"
        class="flex h-16 w-16 flex-col items-center justify-center gap-1 text-fuchsia-900 dark:text-gray-900">
    <!-- HeroIcon - Home Modern -->
       <small className="text-xs font-medium">ホーム</small>
    </a>
    </nav>
</div>
@endsection

