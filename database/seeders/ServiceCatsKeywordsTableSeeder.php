<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceCatsKeywordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('service_cats_keywords')->delete();
        
        \DB::table('service_cats_keywords')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cat_id' => 79,
                'text' => 'swimming',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-20 08:49:03',
            ),
            1 => 
            array (
                'id' => 2,
                'cat_id' => 79,
                'text' => 'gym',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-20 08:49:03',
            ),
            2 => 
            array (
                'id' => 3,
                'cat_id' => 79,
                'text' => 'football',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-20 08:59:37',
            ),
            3 => 
            array (
                'id' => 4,
                'cat_id' => 79,
                'text' => 'basketball',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-20 08:59:37',
            ),
            4 => 
            array (
                'id' => 7,
                'cat_id' => 93,
                'text' => 'Christian',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-22 09:22:33',
            ),
            5 => 
            array (
                'id' => 6,
                'cat_id' => 79,
                'text' => 'recreation',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-20 08:59:56',
            ),
            6 => 
            array (
                'id' => 8,
                'cat_id' => 93,
                'text' => 'Muslim',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-22 09:22:33',
            ),
            7 => 
            array (
                'id' => 9,
                'cat_id' => 93,
                'text' => 'catholic',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-22 09:23:04',
            ),
            8 => 
            array (
                'id' => 10,
                'cat_id' => 93,
                'text' => 'hindu',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-22 09:23:04',
            ),
            9 => 
            array (
                'id' => 11,
                'cat_id' => 93,
                'text' => 'church',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-22 09:23:23',
            ),
            10 => 
            array (
                'id' => 12,
                'cat_id' => 93,
                'text' => 'mosque',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-22 09:23:23',
            ),
            11 => 
            array (
                'id' => 13,
                'cat_id' => 93,
                'text' => 'temple',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-22 09:23:41',
            ),
            12 => 
            array (
                'id' => 14,
                'cat_id' => 93,
                'text' => 'jewish',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-22 09:23:41',
            ),
            13 => 
            array (
                'id' => 15,
                'cat_id' => 1034,
                'text' => 'mosques',
                'created_at' => '2023-04-22 09:39:58',
                'modified_at' => '2023-04-22 09:33:44',
            ),
            14 => 
            array (
                'id' => 16,
                'cat_id' => 31,
                'text' => 'care and support',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-22 10:16:37',
            ),
            15 => 
            array (
                'id' => 17,
                'cat_id' => 79,
                'text' => 'leisure',
                'created_at' => '0000-00-00 00:00:00',
                'modified_at' => '2023-04-22 10:23:16',
            ),
        ));
        
        
    }
}