<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bath;

class BathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('baths')->insert([
            ['id' => 1, 'bath_name' => 'あさひの湯', 'prefecture_id' => '1', 'address' => '札幌市中央区北2条西4丁目'],
            ['id' => 2, 'bath_name' => 'ゆふいんの森', 'prefecture_id' => '37', 'address' => '由布市湯布院川南町2567'],
            ['id' => 3, 'bath_name' => 'たまご湯', 'prefecture_id' => '18', 'address' => '渋谷区道玄坂2丁目14-14'],
            ['id' => 4, 'bath_name' => '金鱗湯', 'prefecture_id' => '30', 'address' => '福岡市中央区大名2-9-22'],
            ['id' => 5, 'bath_name' => 'あんずの湯', 'prefecture_id' => '36', 'address' => '西宮市高松町2丁目5-15'],
            ['id' => 6, 'bath_name' => '山の湯', 'prefecture_id' => '19', 'address' => '上田市大字平井字野辺161-9'],
            ['id' => 7, 'bath_name' => 'みつばの湯', 'prefecture_id' => '4', 'address' => '仙台市泉区南中山2-1-1'],
            ['id' => 8, 'bath_name' => '湯ったり庵', 'prefecture_id' => '9', 'address' => '前橋市片貝町2-1-9'],
            ['id' => 9, 'bath_name' => 'さくらんぼ湯', 'prefecture_id' => '11', 'address' => '南都留郡道志村相倉881-1'],
            ['id' => 10, 'bath_name' => '大自然の湯', 'prefecture_id' => '1', 'address' => '札幌市手稲区稲積公園6-1'],
            ['id' => 11, 'bath_name' => '湯快リゾート', 'prefecture_id' => '8', 'address' => 'いわき市湯本字湯本3-1'],
            ['id' => 12, 'bath_name' => 'たんばら湯', 'prefecture_id' => '11', 'address' => '沼田市大島町鬼石557-1'],
            ['id' => 13, 'bath_name' => '湯っぺん湯', 'prefecture_id' => '15', 'address' => '高岡市常盤町1-101'],
            ['id' => 14, 'bath_name' => 'たかまつの湯', 'prefecture_id' => '13', 'address' => '鯖江市神明町2-53'],
            ['id' => 15, 'bath_name' => 'ひのでの湯', 'prefecture_id' => '29', 'address' => '大津市一里山1-14'],
            ['id' => 16, 'bath_name' => 'やすらぎの湯', 'prefecture_id' => '30', 'address' => '多治見市伊奈波町1140'],
            ['id' => 17, 'bath_name' => 'あかりの湯', 'prefecture_id' => '13', 'address' => '長野市上松1-1-1'],
            ['id' => 18, 'bath_name' => '温泉の宿', 'prefecture_id' => '34', 'address' => '姫路市夢前町1256'],
            ['id' => 19, 'bath_name' => 'ゆーとぴあ岩盤浴', 'prefecture_id' => '4', 'address' => '石巻市豊田町1-1'],
            ['id' => 20, 'bath_name' => 'おおとろ温泉', 'prefecture_id' => '11', 'address' => '南魚沼市下須頃字上須頃155']
        ]);
    }
}
