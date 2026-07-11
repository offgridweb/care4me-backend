<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SysLogEventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sys_log_events')->delete();
        
        \DB::table('sys_log_events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'event' => 'Admin Login',
            ),
            1 => 
            array (
                'id' => 2,
                'event' => 'Admin Login',
            ),
            2 => 
            array (
                'id' => 3,
                'event' => 'User Login',
            ),
            3 => 
            array (
                'id' => 4,
                'event' => 'User Logout',
            ),
            4 => 
            array (
                'id' => 5,
                'event' => 'Provider Registered',
            ),
            5 => 
            array (
                'id' => 6,
                'event' => 'Approval Requested',
            ),
            6 => 
            array (
                'id' => 7,
                'event' => 'Approval Granted',
            ),
            7 => 
            array (
                'id' => 8,
                'event' => 'Approval Denied',
            ),
            8 => 
            array (
                'id' => 9,
                'event' => 'Page Unlisted',
            ),
            9 => 
            array (
                'id' => 10,
                'event' => 'Page Relisted',
            ),
            10 => 
            array (
                'id' => 11,
                'event' => 'User Reset',
            ),
            11 => 
            array (
                'id' => 12,
                'event' => 'Failed Logon',
            ),
        ));
        
        
    }
}