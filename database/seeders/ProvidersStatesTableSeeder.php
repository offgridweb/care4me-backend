<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvidersStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('providers_states')->delete();
        
        \DB::table('providers_states')->insert(array (
            0 => 
            array (
                'id' => 0,
                'status' => 99,
                'status_text' => 'All',
                'status_color' => NULL,
                'updated_at' => '2026-01-01 17:04:48',
                'created_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'id' => 1,
                'status' => 0,
                'status_text' => 'Waiting for approval',
                'status_color' => 'orange',
                'updated_at' => '2026-03-02 12:35:31',
                'created_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'id' => 2,
                'status' => 1,
                'status_text' => 'Approved',
                'status_color' => 'green',
                'updated_at' => '2026-03-02 12:35:36',
                'created_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'id' => 3,
                'status' => 2,
                'status_text' => 'Declined',
                'status_color' => 'red',
                'updated_at' => '2026-03-02 12:35:40',
                'created_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'id' => 4,
                'status' => 4,
                'status_text' => 'Waiting for verification',
                'status_color' => 'orange',
                'updated_at' => '2026-03-02 12:36:11',
                'created_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'id' => 5,
                'status' => 1,
                'status_text' => 'Waiting for approval',
                'status_color' => 'orange',
                'updated_at' => '2026-03-02 12:34:09',
                'created_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'id' => 6,
                'status' => 9,
                'status_text' => 'Archived',
                'status_color' => 'red',
                'updated_at' => '2026-03-02 12:35:58',
                'created_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}