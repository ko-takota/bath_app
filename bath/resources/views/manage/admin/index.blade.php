<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('管理者一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                            @if(session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <div class="flex justify-end mb-4">
                              <button onclick="location.href='{{route('manage.admin.create')}}'" class="text-white bg-yellow-400 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-500 rounded text-lg">新規登録</button>
                            </div>
                          <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                              <thead>
                                <tr>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作成日</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($admins as $admin)
                                <tr>
                                  <td class="px-4 py-3">{{ $admin->name }}</td>
                                  <td class="px-4 py-3">{{ $admin->email }}</td>
                                  <td class="px-4 py-3">{{ $admin->created_at->diffForHumans() }}</td>
                                  <td class="px-4 py-3">
                                    <button onclick="location.href='{{ route('manage.admin.edit', ['admin' => $admin->id]) }}'" class="text-white bg-yellow-500 border-0 py-2 px-3 focus:outline-none hover:bg-yellow-600 rounded">編集</button>
                                  </td>
                                  <form id="delete_{{$admin->id}}" method="POST" action="{{ route('manage.admin.destroy', ['admin' => $admin->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <td class="px-4 py-3">
                                        <a href="#" data-id="{{ $admin->id }}" onclick="deletePost(this)" class="text-white bg-red-300 border-0 py-2 px-3 focus:outline-none hover:bg-red-600 rounded">削除</a>
                                    </td>
                                  </form>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            {{ $admins->links() }}
                          </div>
                        </div>
                    </section>
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
