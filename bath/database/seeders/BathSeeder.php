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
        // DB::table('bathes')->insert([
        //     ['id' => 1, 'bath_name' => 'あさひの湯', 'prefecture_id' => '1', 'price' => '4000','address' => '札幌市中央区北2条西4丁目', 'user_id' => '2'],
        //     ['id' => 2, 'bath_name' => 'ゆふいんの森', 'prefecture_id' => '3', 'price' => '4000','address' => '由布市湯布院川南町2567', 'user_id' => '2'],
        //     ['id' => 3, 'bath_name' => 'たまご湯', 'prefecture_id' => '12', 'price' => '4000','address' => '渋谷区道玄坂2丁目14-14', 'user_id' => '2'],
        //     ['id' => 4, 'bath_name' => '金鱗湯', 'prefecture_id' => '30', 'price' => '4000','address' => '福岡市中央区大名2-9-22', 'user_id' => '2'],
        //     ['id' => 5, 'bath_name' => 'あんずの湯', 'prefecture_id' => '21', 'price' => '4000','address' => '西宮市高松町2丁目5-15', 'user_id' => '2'],
        //     ['id' => 6, 'bath_name' => '山の湯', 'prefecture_id' => '19', 'price' => '4000','address' => '上田市大字平井字野辺161-9', 'user_id' => '2'],
        //     ['id' => 7, 'bath_name' => 'みつばの湯', 'prefecture_id' => '4', 'price' => '4000','address' => '仙台市泉区南中山2-1-1', 'user_id' => '2'],
        //     ['id' => 8, 'bath_name' => '湯ったり庵', 'prefecture_id' => '9', 'price' => '4000','address' => '前橋市片貝町2-1-9', 'user_id' => '2'],
        //     ['id' => 9, 'bath_name' => 'さくらんぼ湯', 'prefecture_id' => '11', 'price' => '4000','address' => '南都留郡道志村相倉881-1', 'user_id' => '2'],
        //     ['id' => 10, 'bath_name' => '大自然の湯', 'prefecture_id' => '2', 'price' => '4000','address' => '札幌市手稲区稲積公園6-1', 'user_id' => '2'],
        //     ['id' => 11, 'bath_name' => '湯快リゾート', 'prefecture_id' => '8', 'price' => '4000','address' => 'いわき市湯本字湯本3-1', 'user_id' => '2'],
        //     ['id' => 12, 'bath_name' => 'たんばら湯', 'prefecture_id' => '18', 'price' => '4000','address' => '沼田市大島町鬼石557-1', 'user_id' => '2'],
        //     ['id' => 13, 'bath_name' => '湯っぺん湯', 'prefecture_id' => '35', 'price' => '4000','address' => '高岡市常盤町1-101', 'user_id' => '2'],
        //     ['id' => 14, 'bath_name' => 'たかまつの湯', 'prefecture_id' => '43', 'price' => '4000','address' => '鯖江市神明町2-53', 'user_id' => '2'],
        //     ['id' => 15, 'bath_name' => 'ひのでの湯', 'prefecture_id' => '29', 'price' => '4000','address' => '大津市一里山1-14', 'user_id' => '2'],
        //     ['id' => 16, 'bath_name' => 'やすらぎの湯', 'prefecture_id' => '33', 'price' => '4000','address' => '多治見市伊奈波町1140', 'user_id' => '2'],
        //     ['id' => 17, 'bath_name' => 'あかりの湯', 'prefecture_id' => '46', 'price' => '4000','address' => '長野市上松1-1-1', 'user_id' => '2'],
        //     ['id' => 18, 'bath_name' => '温泉の宿', 'prefecture_id' => '34', 'price' => '4000','address' => '姫路市夢前町1256', 'user_id' => '2'],
        //     ['id' => 19, 'bath_name' => 'ゆーとぴあ岩盤浴', 'prefecture_id' => '16', 'price' => '4000','address' => '石巻市豊田町1-1', 'user_id' => '2'],
        //     ['id' => 20, 'bath_name' => 'おおとろ温泉', 'prefecture_id' => '22', 'price' => '4000','address' => '南魚沼市下須頃字上須頃155', 'user_id' => '2']
        // ]);
    }
}
