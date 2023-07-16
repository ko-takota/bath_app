<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area_categories')->insert([
            ['name' => '北海道地方'],
            ['name' => '東北地方'],
            ['name' => '関東地方'],
            ['name' => '中部地方'],
            ['name' => '近畿地方'],
            ['name' => '中国地方'],
            ['name' => '四国地方'],
            ['name' => '九州地方']
        ]);






        DB::table('prefcture_categories')->insert([
            ['name' => '北海道', 'area_category_id' => 1],
            ['name' => '青森県', 'area_category_id' => 2],
            ['name' => '岩手県', 'area_category_id' => 2],
            ['name' => '宮城県', 'area_category_id' => 2],
            ['name' => '秋田県', 'area_category_id' => 2],
            ['name' => '山形県', 'area_category_id' => 2],
            ['name' => '福島県', 'area_category_id' => 2],
            ['name' => '茨城県', 'area_category_id' => 3],
            ['name' => '栃木県', 'area_category_id' => 3],
            ['name' => '群馬県', 'area_category_id' => 3],
            ['name' => '埼玉県', 'area_category_id' => 3],
            ['name' => '千葉県', 'area_category_id' => 3],
            ['name' => '東京都', 'area_category_id' => 3],
            ['name' => '神奈川県', 'area_category_id' => 3],
            ['name' => '新潟県', 'area_category_id' => 4],
            ['name' => '富山県', 'area_category_id' => 4],
            ['name' => '石川県', 'area_category_id' => 4],
            ['name' => '福井県', 'area_category_id' => 4],
            ['name' => '山梨県', 'area_category_id' => 4],
            ['name' => '長野県', 'area_category_id' => 4],
            ['name' => '岐阜県', 'area_category_id' => 4],
            ['name' => '静岡県', 'area_category_id' => 4],
            ['name' => '愛知県', 'area_category_id' => 4],
            ['name' => '三重県', 'area_category_id' => 5],
            ['name' => '滋賀県', 'area_category_id' => 5],
            ['name' => '京都府', 'area_category_id' => 5],
            ['name' => '大阪府', 'area_category_id' => 5],
            ['name' => '兵庫県', 'area_category_id' => 5],
            ['name' => '奈良県', 'area_category_id' => 5],
            ['name' => '和歌山県', 'area_category_id' => 5],
            ['name' => '鳥取県', 'area_category_id' => 6],
            ['name' => '島根県', 'area_category_id' => 6],
            ['name' => '岡山県', 'area_category_id' => 6],
            ['name' => '広島県', 'area_category_id' => 6],
            ['name' => '山口県', 'area_category_id' => 6],
            ['name' => '徳島県', 'area_category_id' => 7],
            ['name' => '香川県', 'area_category_id' => 7],
            ['name' => '愛媛県', 'area_category_id' => 7],
            ['name' => '高知県', 'area_category_id' => 7],
            ['name' => '福岡県', 'area_category_id' => 8],
            ['name' => '佐賀県', 'area_category_id' => 8],
            ['name' => '長崎県', 'area_category_id' => 8],
            ['name' => '熊本県', 'area_category_id' => 8],
            ['name' => '大分県', 'area_category_id' => 8],
            ['name' => '宮崎県', 'area_category_id' => 8],
            ['name' => '鹿児島県', 'area_category_id' => 8],
            ['name' => '沖縄県', 'area_category_id' => 8],
        ]);
    }
}
