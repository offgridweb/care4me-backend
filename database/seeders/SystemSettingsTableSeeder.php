<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SystemSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('system_settings')->delete();
        
        \DB::table('system_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'admin_version' => 'v1.40',
                'user_version' => 'v8.080',
                'admin_email' => 'rod@offgridwebdesign.co.uk',
                'mail_host' => 'smtp.mailgun.org',
                'mail_user' => 'support@mg.care4me.org.uk',
                'mail_user_password' => 'Jajwuth&2019',
                'mail_from_email' => 'support@mg.care4me.org.uk',
                'mail_from_name' => 'Care4me support',
                'admin_email2' => 'info@care4me.org.uk',
                'admin_email3' => 'info@care4me.org.uk',
                'created_at' => '2026-02-03 16:58:16',
                'updated_at' => '2026-07-05 21:24:27',
            ),
        ));
        
        
    }
}