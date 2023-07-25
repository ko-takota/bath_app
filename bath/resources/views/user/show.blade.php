<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            銭湯の詳細(main)(diff)
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="text-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $bath->bath_name }}
                </div>
                <div class="bg-white">
                    <nav>{{ $bath->information }}</nav>
                </div>
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <p>プラン選択</p>
                <select name="plan" class="bg-black">
                    @foreach($plan as $plans)
                    {
                        <option value="{{ $plans->name }}">{{ $plans->name }}：{{ $plans->price }}</option>
                    }
                    @endforeach
                </select>
            </div>
            <form method="post" action="{{ route('user.cart.add')}}">
            @csrf
            <button class="flex ml-auth bg-white text-brack border-0 py-2 px-6">入会</button>
            <input type="hidden" name="bath_id" value="{{ $bath->id }}">
            </form>
            <div class="btn-group bg-white" style="width: 200px; margin: 0 auto;">
                @if (Auth::id() != $bath->user_id)
                @if (Auth::user()->is_like($bath->id))
                {!! Form::open(['route' => ['user.bath.unlike', $bath->id], 'method' => 'delete']) !!}
                {!! Form::submit('お気に入り済み', ['class' => 'button btn btn-warning']) !!}
                {!! Form::close() !!}
                @else
                {!! Form::open(['route' => ['user.bath.like', $bath->id]]) !!}
                {!! Form::submit('お気に入りする', ['class' => 'button btn btn-success']) !!}
                {!! Form::close() !!}
                @endif
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
