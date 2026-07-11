<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SystemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('system')->delete();
        
        \DB::table('system')->insert(array (
            0 => 
            array (
                'sys_id' => 1,
                'admin_email' => 'rod@offgridwebdesign.co.uk',
                'register_email' => 'Thank you for registering with Care4me

Your Login Username / Password are:',
                'confirm_email' => 'Your registration with Care4me has now been confirmed.

To login and create your listing page please click:

http://www.care4me.org.uk/login.php

Your Login details are:',
                'message1' => '<p><strong><span style="font-family: verdana,geneva; font-size: medium;">Registration Complete<br /><br /></span></strong></p><p><span style="font-family: verdana,geneva; font-size: medium;">You have successfully registered on the Care4me website. </span><span style="font-family: verdana,geneva; font-size: medium;">Please check your email to find your login username and password.</span></p><p><br /><span style="font-family: verdana,geneva; font-size: medium;">If you have not recieved this email within 10 mins check your Junk Mail folder</span><br /><span style="font-family: verdana,geneva; font-size: medium;">otherwise please let us know.</span></p><p><br /><span style="font-family: verdana,geneva; font-size: medium;">To Login click <a href="/test_system/admin/login.php">here <br /></a></span></p><p><span style="font-family: verdana,geneva; font-size: medium;"><br /></span></p>',
                'message2' => '<p><span style="font-size: small;"><strong>No Search Results Match Your Search</strong></span></p><p><span style="font-size: small;"><strong></strong>Try making your search less specific, e.g. using only one of the drop down search menus.</span></p>',
                'page_approved_email' => 'Your listing has been approved',
                'page_declined_email' => 'Your listing has been declined',
                'page_unlisted_email' => 'Your listing has been unlisted',
                'page_relisted_email' => 'Your listing has been relisted',
                'contact_us' => '<p><strong>Contact Us</strong></p><p><br /><a href="mailto:info@life-times.org.uk">info@life-times.org.uk</a><span style="font-family: verdana,geneva; font-size: medium;">&nbsp;<span style="font-size: small;">or call 020 8875 2846.</span><br /><br /><span style="font-size: small;">Unfortunately we cannot provide individual support to clients looking for services.</span><br /><br /><span style="font-size: small;">Many thanks</span></span></p>',
                'vb_accept_vol_email' => '<p>Thank you registering with the Care4me Volunteer Bank.We have accepted your registration and have listed your availability on the bank.</p>',
                'last_vol_id' => 461,
                'last_vol_id2' => 465,
            ),
        ));
        
        
    }
}