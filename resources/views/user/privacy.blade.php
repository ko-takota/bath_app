@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- layouts.common.blade.phpのレイアウト継承 --}}

<header class="text-gray-900 bg-yellow-700 body-font" style="position: sticky; top: 0; z-index: 100;">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="http://127.0.0.1:8000/#:~:text=%E3%81%A1%E3%82%83%E3%81%84%E3%81%BE%E3%81%99%EF%BC%81-,%E6%B8%A9%E6%B3%89%E3%81%AE%E6%96%B0%E7%9D%80%E6%83%85%E5%A0%B1,-ll" class="mr-5 hover:text-white">お知らせ</a>
            <a href="http://127.0.0.1:8000/#:~:text=kakuninn-,%E5%8F%A3%E3%82%B3%E3%83%9F,-%E5%8F%A3%E3%82%B3%E3%83%9F%E3%81%AF%E3%81%82%E3%82%8A%E3%81%BE" class="mr-5 hover:text-white">口コミ</a>
            <a href="http://127.0.0.1:8000/#:~:text=~-,%E6%B8%A9%E6%B3%89%E3%81%AE%E9%AD%85%E5%8A%9B,-~" class="mr-5 hover:text-white">魅力</a>
            <a href="/register" class="mr-5 hover:text-white">会員登録</a>
            <a href="/contact" class="mr-5 hover:text-white">お問い合わせ</a>
            <a href="/" class="mr-5 hover:text-white">ホーム</a>
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

<div class="relative">
    <img src="{{ asset('images/24120406.jpg')}}" alt="" class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center" style="filter: blur(5px); max-width: 100%;">
    <div class="container px-5 py-6 mx-auto relative z-10">
        <h1 class="text-3xl mb-4">プライバシーポリシー</h1>
        <p>バスクリプション（以下，「当サイト」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。</p>
        <h2 class="text-2xl mt-16 mb-4">第1条（個人情報）</h2>
        <p>「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
        <h2 class="text-2xl mt-8 mb-4">第2条（個人情報の収集方法）</h2>
        <p>当サイトは，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当サイトの提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。</p>
        <h2 class="text-2xl mt-8 mb-4">第3条（個人情報を収集・利用する目的）</h2>
        <p>当サイトが個人情報を収集・利用する目的は，以下のとおりです。</p>
        <ul>
            <li>当サイトサービスの提供・運営のため</li>
            <li>ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</li>
            <li>ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当サイトが提供する他のサービスの案内のメールを送付するため</li>
            <li>メンテナンス，重要なお知らせなど必要に応じたご連絡のため</li>
            <li>利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため</li>
            <li>ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため</li>
            <li>有料サービスにおいて，ユーザーに利用料金を請求するため</li>
            <li>上記の利用目的に付随する目的</li>
        </ul>
        <h2 class="text-2xl mt-8 mb-4">第4条（利用目的の変更）</h2>
        <p>当サイトは，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。<br />利用目的の変更を行った場合には，変更後の目的について，当サイト所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。</p>
        <h2 class="text-2xl mt-8 mb-4">第5条（個人情報の第三者提供）</h2>
        <p>当サイトは，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。</p>
        <ul>
            <li>人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき</li>
            <li>公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき</li>
            <li>国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき</li>
            <li>予め次の事項を告知あるいは公表し，かつ当サイトが個人情報保護委員会に届出をしたとき</li>
            <li>利用目的に第三者への提供を含むこと</li>
            <li>第三者に提供されるデータの項目</li>
            <li>第三者への提供の手段または方法</li>
            <li>本人の求めに応じて個人情報の第三者への提供を停止すること</li>
            <li>本人の求めを受け付ける方法</li>
            <li>前項の定めにかかわらず，次に掲げる場合には，当該情報の提供先は第三者に該当しないものとします。</li>
            <li>当サイトが利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合</li>
            <li>合併その他の事由による事業の承継に伴って個人情報が提供される場合</li>
            <li>個人情報を特定の者との間で共同して利用する場合であって，その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し，または本人が容易に知り得る状態に置いた場合</li>
        </ul>
        <h2 class="text-2xl mt-8 mb-4">第6条（個人情報の開示）</h2>
        <p>当サイトは，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。なお，個人情報の開示に際しては，1件あたり1，000円の手数料を申し受けます。</p>
        <ul>
            <li>本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合</li>
            <li>当サイトの業務の適正な実施に著しい支障を及ぼすおそれがある場合</li>
            <li>その他法令に違反することとなる場合</li>
        </ul>
        <p>前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。</p>
        <h2 class="text-2xl mt-8 mb-4">第7条（個人情報の訂正および削除）</h2>
        <p>ユーザーは，当サイトの保有する自己の個人情報が誤った情報である場合には，当サイトが定める手続きにより，当サイトに対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。<br />当サイトは，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。</p>
        <p>当サイトは，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。</p>
        <h2 class="text-2xl mt-8 mb-4">第8条（個人情報の利用停止等）</h2>
        <p>当サイトは，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。</p>
        <p>前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。<br />当サイトは，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。</p>
        <p>前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。</p>
        <h2 class="text-2xl mt-8 mb-4">第9条（プライバシーポリシーの変更）</h2>
        <p>本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。<br />当サイトが別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。</p>
        <p class="mt-8 mb-4">以上</p>
    </div>
</div>