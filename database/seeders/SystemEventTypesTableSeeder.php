<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SystemEventTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('system_event_types')->delete();
        
        \DB::table('system_event_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 1,
                'name' => 'Provider register request',
                'updated_at' => '2026-02-03 13:13:08',
                'created_at' => '2026-02-03 13:13:08',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 1,
                'name' => 'Provider Email Verified',
                'updated_at' => '2026-02-03 13:14:07',
                'created_at' => '2026-02-03 13:14:07',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 1,
                'name' => 'Provider Approved',
                'updated_at' => '2026-02-03 13:14:07',
                'created_at' => '2026-02-03 13:14:07',
            ),
            3 => 
            array (
                'id' => 5,
                'type' => 1,
                'name' => 'Provider Declined',
                'updated_at' => '2026-02-03 13:14:42',
                'created_at' => '2026-02-03 13:14:42',
            ),
            4 => 
            array (
                'id' => 6,
                'type' => 1,
                'name' => 'Provider Archived',
                'updated_at' => '2026-02-03 13:14:42',
                'created_at' => '2026-02-03 13:14:42',
            ),
            5 => 
            array (
                'id' => 10,
                'type' => 9,
                'name' => 'Contact form received',
                'updated_at' => '2026-02-03 14:36:48',
                'created_at' => '2026-02-03 14:36:48',
            ),
            6 => 
            array (
                'id' => 20,
                'type' => 2,
                'name' => 'Listing Created',
                'updated_at' => '2026-02-03 13:15:31',
                'created_at' => '2026-02-03 13:15:31',
            ),
            7 => 
            array (
                'id' => 21,
                'type' => 2,
                'name' => 'Listing Updated',
                'updated_at' => '2026-02-03 13:15:31',
                'created_at' => '2026-02-03 13:15:31',
            ),
            8 => 
            array (
                'id' => 23,
                'type' => 2,
                'name' => 'Listing Archived',
                'updated_at' => '2026-02-03 13:16:02',
                'created_at' => '2026-02-03 13:16:02',
            ),
            9 => 
            array (
                'id' => 24,
                'type' => 2,
                'name' => 'Listing Approved',
                'updated_at' => '2026-02-03 13:16:02',
                'created_at' => '2026-02-03 13:16:02',
            ),
            10 => 
            array (
                'id' => 25,
                'type' => 2,
                'name' => 'Listing Declined',
                'updated_at' => '2026-02-03 13:16:13',
                'created_at' => '2026-02-03 13:16:13',
            ),
            11 => 
            array (
                'id' => 30,
                'type' => 3,
                'name' => 'User logged in',
                'updated_at' => '2026-02-09 10:26:48',
                'created_at' => '2026-02-09 10:26:48',
            ),
            12 => 
            array (
                'id' => 31,
                'type' => 3,
                'name' => 'User logged out',
                'updated_at' => '2026-02-09 10:26:48',
                'created_at' => '2026-02-09 10:26:48',
            ),
        ));
        
        
    }
}