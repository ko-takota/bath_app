<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('オーナー一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{--変更成功の場合のメッセージ--}}
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <h1>管理者情報</h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (Auth::check())
                        名前：{{ $admin->name }}<br>
                        ID：{{ $admin->email }}<br>
                    @endif
                    <button type="submit" onclick="location.href='{{ route('admin.information.edit', ['information' => $admin->id])}}'">編集する</button>

                    <form id="delete_{{$admin->id}}" method="POST" action="{{ route('admin.information.destroy', ['information' => $admin->id]) }}">
                        @method('delete')
                        @csrf
                    <a href="#" data-id="{{ $admin->id }}" onclick="deletePost(this)" class="text-red-600">アカウント削除</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e) {
            if(confirm('本当にアカウントを削除してもいい？')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>
