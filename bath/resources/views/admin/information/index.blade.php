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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="bg-white text-black-600">管理者情報</p>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    @if (Auth::check())
                        名前：{{ $admin->name }}<br>
                        ID：{{ $admin->email }}<br>
                    @endif
                    <button type="submit" onclick="location.href='{{ route('admin.information.edit', ['information' => $admin->id])}}'">編集する</button>
                </div>
            </div>
        </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="bg-white text-black-600">施設情報</p>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
<<<<<<< HEAD
                    @if (Auth::check())
                        施設名：{{ $admin->bath->name }}<br>
                        施設情報：{{ $admin->bath->information }}<br>
                        住所：{{ $admin->bath->address }}<br>
                        都道府県：{{ $admin->bath->prefcture_category_id }}<br>
                    @endif
=======
                    @foreach ($baths as $bath)
                        施設名：{{ $bath->bath_name }}<br>
                        施設情報：{{ $bath->information }}<br>
                        住所：{{ $bath->address }}<br>
                        都道府県：{{ $bath->prefcture_category_id }}<br>
                    @endforeach
>>>>>>> admin_bath
                    <button type="submit" onclick="location.href='{{ route('admin.information.edit', ['information' => $admin->id])}}'">編集する</button>
                </div>
            </div>
        </div>
        <form class="text-red-600" id="delete_{{$admin->id}}" method="POST" action="{{ route('admin.information.destroy', ['information' => $admin->id]) }}">
            @method('delete')
            @csrf
        <button><a href="#" data-id="{{ $admin->id }}" onclick="deletePost(this)">アカウント削除</button>
        </form>
    </div>
    <script>
        function deletePost(e) {
            if(confirm('本当にアカウントを削除してもいい？')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>
