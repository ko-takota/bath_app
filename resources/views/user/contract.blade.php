@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="mt-24 mb-8 text-xl text-center">
    〜契約中〜
</div>
<div class="absolute top-4 right-16">
    <button class="bg-gray-400 text-white active:bg-gray-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <a class="dropdown-item" href="{{ route('user.index', ['id' => $user]) }}">マイページ</a>
    </button>
</div>
@foreach ($pays as $pay)
<section class="text-gray-600 body-font border">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="温泉施設" src="{{ asset('storage/baths/' . $pay->bath->image)}}">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><span class="text-sm">プラン名：</span>{{ $pay->plan->name }}</h1>
        <p class="mb-8 leading-relaxed">{{ $pay->bath->name }}</p>
        <div class="flex justify-center">
            <a href="{{ route('user.item.show', ['item' => $pay->bath_id ])}}" class="inline-flex items-center">
            <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">詳細</button>
            </a>
        </div>
      </div>
    </div>
  </section>
  @endforeach
