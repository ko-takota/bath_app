@vite(['resources/css/app.css', 'resources/js/app.js'])

<section>
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-24">
        <div class="flex flex-wrap items-center mx-auto max-w-7xl">
            <div class="w-full lg:max-w-lg lg:w-1/2 rounded-xl">
                <div>
                    <div class="relative w-full max-w-lg">
                        <div class="absolute top-0 rounded-full bg-violet-300 -left-4 w-72 h-72 mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
                        <div class="absolute rounded-full bg-fuchsia-300 -bottom-24 right-20 w-72 h-72 mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
                        <div class="relative">
                            <img class="object-cover object-center mx-auto rounded-lg shadow-2xl" alt="施設写真" src="{{ asset('storage/baths/' . $bath->image)}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-start mt-12 mb-16 text-left lg:flex-grow lg:w-1/2 lg:pl-6 xl:pl-24 md:mb-0 xl:mt-0">
                <span class="mb-8 text-lg font-bold tracking-widest text-blue-600 uppercase"> 施設詳細 </span>
                <h1 class="mb-8 text-4xl font-bold leading-none tracking-tighter text-neutral-600 md:text-7xl lg:text-5xl">{{ $bath->name }}</h1>
                <p class="mb-8 text-base leading-relaxed text-left text-gray-500 w-full h-full" disabled>{{ $bath->information }}</p>
                <div class="mt-0 lg:mt-6 max-w-7xl sm:flex">
                    <form method="post" action="{{ route('user.cart.add')}}">
                        @csrf
                        @if (session('message'))
                            <div class="alert alert-danger">
                                {{ session('message') }}
                            </div>
                        @endif
                        <p>プラン選択</p>
                        <select name="plan_id" class="bg-gray-300">
                            <option value="" selected>選択してください</option>
                                @foreach($plans as $plan)
                                    {
                                        <option value="{{ $plan->id }}">{{ $plan->name }}：月額{{ $plan->price }}円</option>
                                    }
                                @endforeach
                        </select>
                        <button class="ml-auth bg-blue-500 text-brack border-0 py-2 px-6 hover:bg-yellow-500 rounded-full">カートに入れる</button>
                        <input type="hidden" name="bath_id" value="{{ $bath->id }}">
                    </form>
                </div>
                {{-- お気に入り機能 --}}
                <button>
                    <div class="btn-group bg-white">
                        @if (Auth::id() != $bath->user_id)
                            @if (Auth::user()->is_like($bath->id))
                            {!! Form::open(['route' => ['user.bath.unlike', $bath->id], 'method' => 'delete']) !!}
                            {!! Form::submit('❤️いいねしました', ['class' => 'button btn btn-warning']) !!}
                            {!! Form::close() !!}
                            @else
                            {!! Form::open(['route' => ['user.bath.like', $bath->id]]) !!}
                            {!! Form::submit('♡いいねする', ['class' => 'button btn btn-success'])!!}
                            {!! Form::close() !!}
                            @endif
                        @endif
                    </div>
                </button>

            </div>
        </div>

    </div>
    <div class="カート一覧 overflow-x-auto py-8 px-4 mx-auto relative flex justify-start p-6 bg-opacity-75">
        @foreach ($plans as $plan)
        <div class="flex-shrink-0 w-72 bg-yellow-400 shadow-md p-4 rounded-lg m-2 mr-12">
        <p class="">プラン名<br><span class="text-2xl">{{$plan->name}}</span></p>
        <p>プラン説明：<br>{{$plan->contents}}</p>
        <div class="flex">
            <p class="bg-yellow-200">月額{{$plan->price}}円</p>
        </div>
        </div>
        @endforeach
    </div>
    <div class="px-24 py-12">
        <a href="{{route('user.search')}}" class="bg-white hover:bg-yellow-500 rounded-full">施設一覧へ</a>
    </div>
</section>







