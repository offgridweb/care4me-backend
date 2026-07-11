<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublishStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publish_states')->delete();
        
        \DB::table('publish_states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 99,
                'status_text' => 'All',
                'status_btncolor' => NULL,
                'color' => '',
                'created_at' => '2026-01-04 10:24:11',
                'updated_at' => '2026-01-04 10:24:11',
            ),
            1 => 
            array (
                'id' => 2,
                'status' => 4,
                'status_text' => 'Listed',
                'status_btncolor' => 'success',
                'color' => 'green',
                'created_at' => '2023-08-17 11:19:54',
                'updated_at' => '2023-08-17 11:19:54',
            ),
            2 => 
            array (
                'id' => 3,
                'status' => 2,
                'status_text' => 'Waiting Approval',
                'status_btncolor' => NULL,
                'color' => 'orange',
                'created_at' => '2023-08-17 11:19:54',
                'updated_at' => '2023-08-17 11:19:54',
            ),
            3 => 
            array (
                'id' => 4,
                'status' => 3,
                'status_text' => 'Listing Declined',
                'status_btncolor' => NULL,
                'color' => 'red',
                'created_at' => '2023-08-17 11:20:17',
                'updated_at' => '2023-08-17 11:20:17',
            ),
            4 => 
            array (
                'id' => 5,
                'status' => 9,
                'status_text' => 'Archived',
                'status_btncolor' => NULL,
                'color' => 'red',
                'created_at' => '2026-01-03 18:11:51',
                'updated_at' => '2026-01-03 18:11:51',
            ),
            5 => 
            array (
                'id' => 11,
                'status' => 1,
                'status_text' => 'Waiting Approval',
                'status_btncolor' => NULL,
                'color' => 'orange',
                'created_at' => '2023-08-17 11:19:54',
                'updated_at' => '2023-08-17 11:19:54',
            ),
        ));
        
        
    }
}