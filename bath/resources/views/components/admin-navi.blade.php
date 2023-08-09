<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
        <div class="flex justify-end w-full"> <!-- 1. 横幅を全体に広げる -->
            <!-- Navigation Links -->
            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('admin.member')" :active="request()->routeIs('admin.member')">
                    <span class="text-lg hover:font-bold">会員管理</span>
                </x-nav-link>
                <x-nav-link :href="route('admin.plan.index')" :active="request()->routeIs('admin.plan.index')">
                    <span class="text-lg hover:font-bold">プラン</span>
                </x-nav-link>
                <x-nav-link :href="route('admin.post.index')" :active="request()->routeIs('admin.post.index')">
                    <span class="text-lg hover:font-bold">お知らせ投稿</span>
                </x-nav-link>
            </div>
        </div>
    </div>
</div>
