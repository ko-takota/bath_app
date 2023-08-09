<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('施設一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <form action="{{ route('admin.bath.select.save') }}" method="post">
                    @csrf
                    @foreach ($baths as $bath)
                        <div class="bg-white mb-6 p-6 text-gray-900 dark:text-gray-100">
                            <div> {{ $bath->name }} </div>
                            <div>
                                @if(empty($bath->image))
                                    <img src="{{ asset('images/no_image.jpg')}}">
                                @else
                                    <img src="{{ asset('storage/baths/' . $bath->image)}}">
                                @endif
                            </div>

                            <button type="submit" class="bg-yellow-400 rounded-lg" name="bath_id" value="{{ $bath->id }}">
                                編集する
                            </button>
                        </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


{{-- <form action="{{ route('admin.bath.select.save') }}" method="post">
    @csrf
    <label for="bath">施設を選択:</label>
    <select name="bath_id" id="bath">
        @foreach(Auth::user()->baths as $bath)
            <option value="{{ $bath->id }}">施設名：{{ $bath->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="bg-yellow-400 rounded-lg">編集する</button>
</form> --}}
