@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('layouts.common')

<header class="text-gray-900 bg-yellow-700 body-font" style="position: sticky; top: 0; z-index: 100;">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="http://127.0.0.1:8000/#:~:text=%E3%81%A1%E3%82%83%E3%81%84%E3%81%BE%E3%81%99%EF%BC%81-,%E6%B8%A9%E6%B3%89%E3%81%AE%E6%96%B0%E7%9D%80%E6%83%85%E5%A0%B1,-ll" class="mr-5 hover:text-white">お知らせ</a>
            <a href="http://127.0.0.1:8000/#:~:text=kakuninn-,%E5%8F%A3%E3%82%B3%E3%83%9F,-%E5%8F%A3%E3%82%B3%E3%83%9F%E3%81%AF%E3%81%82%E3%82%8A%E3%81%BE" class="mr-5 hover:text-white">口コミ</a>
            <a href="http://127.0.0.1:8000/#:~:text=~-,%E6%B8%A9%E6%B3%89%E3%81%AE%E9%AD%85%E5%8A%9B,-~" class="mr-5 hover:text-white">魅力</a>
            <a href="/register" class="mr-5 hover:text-white">会員登録</a>
            <a href="/contact" class="mr-5 hover:text-white">お問い合わせ</a>
        </nav>
        <a href="http://127.0.0.1:8000/#:~:text=%E3%82%82%E7%B9%8B%E3%81%8C%E3%82%8A%E3%81%BE%E3%81%99%E3%80%82-,%E3%83%9E%E3%83%83%E3%83%81%E3%83%B3%E3%82%B0%E3%82%BB%E3%83%B3%E3%83%88%E3%83%BC%E3%81%A3%E3%81%A6%E4%BD%95%EF%BC%9F%EF%BC%9F,-%E5%85%A5%E3%82%8C%E3%81%B0%E5%85%A5%E3%82%8B">
            <h1 class="sm:text-3xl text-2xl font-medium title-font" style="background-image: linear-gradient(to bottom, #f75234, #f8d28b);">バスクリプション</h1>
        </a>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <button class="inline-flex items-center bg-gray-400 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="{{ route('user.search') }}">検索</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
</header>


<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-24">
            <h1 class="text-4xl font-medium p-6 title-font mb-12 text-gray-900">お問い合わせ</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base mb-8">以下のフォームよりお問い合わせください。</p>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">また、【施設管理者の方】のお問い合わせもこちらにて受け付けております。 </p>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">※折り返しご連絡させていただきます。</p>
        </div>
        <div class="mx-auto max-w-xl">
            <div class="flex-wrap -m-2">
                <div class="p-2 mb-12">
                    <div class="relative">
                    <label for="name" class="leading-7 text-sm text-gray-600">お名前<span>(必須)</span></label>
                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="p-2 mb-12">
                    <div class="relative">
                    <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス<span>(必須)</label>
                    <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class='grunion-field-select-wrap grunion-field-wrap contact-form-dropdown-wrap ui-front'>
                    <label for='g958-5' class='grunion-field-label select'> お問い合わせ内容の種類をお選び下さい。<span>(必須)</span></label>
                    <select name='g958-5' id='g958-5' class='select  grunion-field contact-form-dropdown' required aria-required='true'>
                        <option value=''>オプションを1つ選択</option>
                        <option value='１.コース・料金プランについて'>１.コース・料金プランについて</option>
                        <option value='２.ご利用方法について'>２.ご利用方法について</option>
                        <option value='３.登録方法について'>３.登録方法について</option>
                        <option value='４.その他'>４.その他</option>
                    </select>
                </div>
                <div class="p-2 w-full mt-8 mb-12">
                    <div class="relative">
                    <label for="message" class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                    <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <a href="/">
                        <button class="flex mx-auto text-white bg-yellow-700 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-400 rounded-full text-lg" onclick="ButtonClick();">送信</button>
                    </a>
                </div>
                <script>
                    function ButtonClick(){
                        alert('送信しました。');
                    }
                </script>
            </div>
        </div>
    </div>
  </section>
