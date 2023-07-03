<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['id' => 1, 'name' => 'あさひの湯', 'mst_prefectures' => '北海道', 'address' => '札幌市中央区北2条西4丁目'],
            ['id' => 2, 'name' => 'ゆふいんの森', 'mst_prefectures' => '大分県', 'address' => '由布市湯布院川南町2567'],
            ['id' => 3, 'name' => 'たまご湯', 'mst_prefectures' => '東京都', 'address' => '渋谷区道玄坂2丁目14-14'],
            ['id' => 4, 'name' => '金鱗湯', 'mst_prefectures' => '福岡県', 'address' => '福岡市中央区大名2-9-22'],
            ['id' => 5, 'name' => 'あんずの湯', 'mst_prefectures' => '兵庫県', 'address' => '西宮市高松町2丁目5-15'],
            ['id' => 6, 'name' => '山の湯', 'mst_prefectures' => '長野県', 'address' => '上田市大字平井字野辺161-9'],
            ['id' => 7, 'name' => 'みつばの湯', 'mst_prefectures' => '宮城県', 'address' => '仙台市泉区南中山2-1-1'],
            ['id' => 8, 'name' => '湯ったり庵', 'mst_prefectures' => '群馬県', 'address' => '前橋市片貝町2-1-9'],
            ['id' => 9, 'name' => 'さくらんぼ湯', 'mst_prefectures' => '山梨県', 'address' => '南都留郡道志村相倉881-1'],
            ['id' => 10, 'name' => '大自然の湯', 'mst_prefectures' => '北海道', 'address' => '札幌市手稲区稲積公園6-1'],
            ['id' => 11, 'name' => '湯快リゾート', 'mst_prefectures' => '福島県', 'address' => 'いわき市湯本字湯本3-1'],
            ['id' => 12, 'name' => 'たんばら湯', 'mst_prefectures' => '群馬県', 'address' => '沼田市大島町鬼石557-1'],
            ['id' => 13, 'name' => '湯っぺん湯', 'mst_prefectures' => '富山県', 'address' => '高岡市常盤町1-101'],
            ['id' => 14, 'name' => 'たかまつの湯', 'mst_prefectures' => '福井県', 'address' => '鯖江市神明町2-53'],
            ['id' => 15, 'name' => 'ひのでの湯', 'mst_prefectures' => '滋賀県', 'address' => '大津市一里山1-14'],
            ['id' => 16, 'name' => 'やすらぎの湯', 'mst_prefectures' => '岐阜県', 'address' => '多治見市伊奈波町1140'],
            ['id' => 17, 'name' => 'あかりの湯', 'mst_prefectures' => '長野県', 'address' => '長野市上松1-1-1'],
            ['id' => 18, 'name' => '温泉の宿', 'mst_prefectures' => '兵庫県', 'address' => '姫路市夢前町1256'],
            ['id' => 19, 'name' => 'ゆーとぴあ岩盤浴', 'mst_prefectures' => '宮城県', 'address' => '石巻市豊田町1-1'],
            ['id' => 20, 'name' => 'おおとろ温泉', 'mst_prefectures' => '新潟県', 'address' => '南魚沼市下須頃字上須頃155']
        ];
        DB::table('bathes')->insert($params);

    }
}
