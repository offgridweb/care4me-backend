<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('areas')->delete();
        
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'area_id' => 2,
                'area_name' => 'All Wandsworth',
                'area_image' => '',
                'area_count' => 790,
                'area_postcode' => '',
            ),
            1 => 
            array (
                'area_id' => 3,
                'area_name' => 'All London',
                'area_image' => '',
                'area_count' => 323,
                'area_postcode' => '',
            ),
            2 => 
            array (
                'area_id' => 4,
                'area_name' => 'Balham',
                'area_image' => '',
                'area_count' => 831,
                'area_postcode' => 'SW12',
            ),
            3 => 
            array (
                'area_id' => 5,
                'area_name' => 'Bedford',
                'area_image' => '',
                'area_count' => 789,
                'area_postcode' => '',
            ),
            4 => 
            array (
                'area_id' => 6,
                'area_name' => 'Earlsfield',
                'area_image' => '',
                'area_count' => 818,
                'area_postcode' => 'SW18',
            ),
            5 => 
            array (
                'area_id' => 7,
                'area_name' => 'East Putney',
                'area_image' => '',
                'area_count' => 826,
                'area_postcode' => 'SW15',
            ),
            6 => 
            array (
                'area_id' => 8,
                'area_name' => 'Fairfield',
                'area_image' => '',
                'area_count' => 800,
                'area_postcode' => 'SW18',
            ),
            7 => 
            array (
                'area_id' => 9,
                'area_name' => 'Furzedown',
                'area_image' => '',
                'area_count' => 802,
                'area_postcode' => 'SW16',
            ),
            8 => 
            array (
                'area_id' => 10,
                'area_name' => 'Graveney',
                'area_image' => '',
                'area_count' => 799,
                'area_postcode' => 'SW17',
            ),
            9 => 
            array (
                'area_id' => 11,
                'area_name' => 'Latchmere',
                'area_image' => '',
                'area_count' => 790,
                'area_postcode' => 'SW11',
            ),
            10 => 
            array (
                'area_id' => 12,
                'area_name' => 'Nightingale',
                'area_image' => '',
                'area_count' => 789,
                'area_postcode' => 'SW12',
            ),
            11 => 
            array (
                'area_id' => 13,
                'area_name' => 'Northcote',
                'area_image' => '',
                'area_count' => 788,
                'area_postcode' => 'SW11',
            ),
            12 => 
            array (
                'area_id' => 14,
                'area_name' => 'Queenstown',
                'area_image' => '',
                'area_count' => 788,
                'area_postcode' => 'SW8',
            ),
            13 => 
            array (
                'area_id' => 15,
                'area_name' => 'Roehampton',
                'area_image' => '',
                'area_count' => 789,
                'area_postcode' => 'SW15',
            ),
            14 => 
            array (
                'area_id' => 16,
                'area_name' => 'Shaftesbury',
                'area_image' => '',
                'area_count' => 788,
                'area_postcode' => '',
            ),
            15 => 
            array (
                'area_id' => 17,
                'area_name' => 'Southfields',
                'area_image' => '',
                'area_count' => 788,
                'area_postcode' => 'SW18',
            ),
            16 => 
            array (
                'area_id' => 18,
                'area_name' => 'Thamesfield',
                'area_image' => '',
                'area_count' => 789,
                'area_postcode' => 'SW15',
            ),
            17 => 
            array (
                'area_id' => 19,
                'area_name' => 'Tooting',
                'area_image' => '',
                'area_count' => 788,
                'area_postcode' => 'SW17',
            ),
            18 => 
            array (
                'area_id' => 20,
                'area_name' => 'Wandsworth Common',
                'area_image' => '',
                'area_count' => 788,
                'area_postcode' => 'SW18',
            ),
            19 => 
            array (
                'area_id' => 21,
                'area_name' => 'West Hill',
                'area_image' => '',
                'area_count' => 788,
                'area_postcode' => 'SW15',
            ),
            20 => 
            array (
                'area_id' => 23,
                'area_name' => 'West Putney',
                'area_image' => '',
                'area_count' => 789,
                'area_postcode' => 'SW15',
            ),
            21 => 
            array (
                'area_id' => 28,
                'area_name' => 'Other London Borough',
                'area_image' => '',
                'area_count' => 831,
                'area_postcode' => '',
            ),
            22 => 
            array (
                'area_id' => 1002,
                'area_name' => 'Battersea',
                'area_image' => '',
                'area_count' => 16,
                'area_postcode' => 'SW11',
            ),
            23 => 
            array (
                'area_id' => 1003,
                'area_name' => 'Wimbledon',
                'area_image' => '',
                'area_count' => 0,
                'area_postcode' => 'SW19',
            ),
            24 => 
            array (
                'area_id' => 1004,
                'area_name' => 'Kingston',
                'area_image' => '',
                'area_count' => 0,
                'area_postcode' => '',
            ),
            25 => 
            array (
                'area_id' => 1005,
                'area_name' => 'Putney',
                'area_image' => '',
                'area_count' => 0,
                'area_postcode' => '',
            ),
            26 => 
            array (
                'area_id' => 1009,
                'area_name' => 'Clapham',
                'area_image' => '',
                'area_count' => 0,
                'area_postcode' => '',
            ),
            27 => 
            array (
                'area_id' => 1007,
                'area_name' => 'Wandsworth Town',
                'area_image' => '',
                'area_count' => 0,
                'area_postcode' => '',
            ),
            28 => 
            array (
                'area_id' => 1008,
                'area_name' => 'Richmond',
                'area_image' => '',
                'area_count' => 0,
                'area_postcode' => '',
            ),
        ));
        
        
    }
}