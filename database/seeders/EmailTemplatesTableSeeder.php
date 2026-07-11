<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmailTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_templates')->delete();
        
        \DB::table('email_templates')->insert(array (
            0 => 
            array (
                'id' => 5,
                'email_name' => 'Provider Registration - Approved - User Notify',
                'admin_email' => 9,
                'email_subject' => 'Care4me - Login Details',
                'email_body' => '<p>Thank you for registering as a new Service Provider with Care4me.</p><p>&nbsp;</p><p>To get started with creating your listing on the site, please click the link below to set-up your login password.</p>',
                'archive' => 0,
                'updated_at' => '2026-02-20 20:09:14',
                'created_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'id' => 7,
                'email_name' => 'Provider Registration - Admin Notify',
                'admin_email' => 1,
                'email_subject' => 'Care4me Provider Registration',
                'email_body' => '<p>A new service provider had registered</p>',
                'archive' => 0,
                'updated_at' => '2026-02-20 10:59:33',
                'created_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'id' => 6,
                'email_name' => 'User Password Reset Link',
                'admin_email' => 9,
                'email_subject' => 'Care4me - Password Reset Request',
                'email_body' => '<p>Hi,</p><p>We received a request to reset the password for your account.</p><p>If you did not request a password reset, you can safely ignore this email — your password will not be changed.</p><p>If you need help, contact our support team at <a target="_blank" rel="noopener noreferrer nofollow" href="mailto:support@care4me.org.uk">support@care4me.org.uk</a>.</p><p>Best regards,<br>Care4Me Support Team</p><p></p><p>Click the link below to create a new password:</p>',
                'archive' => 0,
                'updated_at' => '2026-02-20 10:52:02',
                'created_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'id' => 17,
                'email_name' => 'Provider Registration - Acknowledge',
                'admin_email' => 9,
                'email_subject' => 'Care4Me Provider Registration - Received',
                'email_body' => '<p>Thank you for submitting your registration to Care4me. We are reviewing your application and after checking it conforms to our listing guidelines we will send your login details.<br></p><p>If you have any questions then contact the care4me team on the details below:<br><br>Tel: 0800 433 7171<br>Email: info@care4me.org.uk</p><h5></h5><p></p>',
                'archive' => 0,
                'updated_at' => '2026-02-20 10:52:18',
                'created_at' => '2026-01-15 10:48:42',
            ),
            4 => 
            array (
                'id' => 19,
                'email_name' => 'Provider Updated - Admin Notify',
                'admin_email' => 1,
                'email_subject' => 'Care4me Admin - Provider Updated',
                'email_body' => '<p>The provider has updated their details</p>',
                'archive' => 0,
                'updated_at' => '2026-03-02 17:52:02',
                'created_at' => '2026-02-20 10:57:55',
            ),
            5 => 
            array (
                'id' => 20,
                'email_name' => 'Listing Awaiting Approval - Admin Notify',
                'admin_email' => 1,
                'email_subject' => 'Care4me - Listing  Awaiting Approval',
                'email_body' => '<p>Listing awaiting approval</p>',
                'archive' => 0,
                'updated_at' => '2026-02-20 19:06:44',
                'created_at' => '2026-02-20 19:03:49',
            ),
            6 => 
            array (
                'id' => 21,
                'email_name' => 'Listing Awaiting Approval - User Notify',
                'admin_email' => 9,
                'email_subject' => 'Care4me - Listing Awaiting Approval',
                'email_body' => '<p>We are reviewing your listing and will let you know when it has been appoved and listed on Care4me.</p>',
                'archive' => 0,
                'updated_at' => '2026-02-20 19:56:40',
                'created_at' => '2026-02-20 19:06:31',
            ),
            7 => 
            array (
                'id' => 22,
                'email_name' => 'Listing Approved - User Notify',
                'admin_email' => 9,
                'email_subject' => 'Care4me - Listing has been approved',
                'email_body' => '<p>Your listing has been approved and is now listed on care4me.</p>',
                'archive' => 0,
                'updated_at' => '2026-02-20 19:56:29',
                'created_at' => '2026-02-20 19:40:41',
            ),
            8 => 
            array (
                'id' => 23,
                'email_name' => 'Listing Declined - User Notify',
                'admin_email' => 9,
                'email_subject' => 'Care4me - Listing Declined',
                'email_body' => '<p>We have reviewed your listing and unfortunately it does not pass our guidelines for listing on our site.</p><p></p>',
                'archive' => 0,
                'updated_at' => '2026-02-20 19:56:50',
                'created_at' => '2026-02-20 19:56:18',
            ),
            9 => 
            array (
                'id' => 24,
                'email_name' => 'Listing Under Review - User Notify',
                'admin_email' => 9,
                'email_subject' => 'Care4me - Listing Under Review',
                'email_body' => '<p>We are currently reviewing your listing and it has been temporarily removed from our site,</p>',
                'archive' => 0,
                'updated_at' => '2026-02-20 20:06:03',
                'created_at' => '2026-02-20 20:02:52',
            ),
            10 => 
            array (
                'id' => 4,
                'email_name' => 'Provider Registration - Declined - User Notify',
                'admin_email' => 9,
                'email_subject' => 'Care4me - Provider Registration Declined',
                'email_body' => '<p>We have reviewed your registration details and unfortunately it does not meet our guidelines for listing your service on our website.</p>',
                'archive' => 0,
                'updated_at' => '2026-02-20 20:09:53',
                'created_at' => '2026-02-20 20:08:52',
            ),
            11 => 
            array (
                'id' => 26,
                'email_name' => 'tesr',
                'admin_email' => 1,
                'email_subject' => 'hbhbhfbfbfbssd',
                'email_body' => '<p>hbhewbhewb</p>',
                'archive' => 0,
                'updated_at' => '2026-02-25 00:36:26',
                'created_at' => '2026-02-25 00:36:26',
            ),
            12 => 
            array (
                'id' => 27,
            'email_name' => 'Listing Created (Admin) - User Notify',
                'admin_email' => 9,
                'email_subject' => 'Care4me - New Listing Added',
                'email_body' => '<p>We have added a new listing to our system </p>',
                'archive' => 0,
                'updated_at' => '2026-03-03 23:27:55',
                'created_at' => '2026-03-02 13:29:25',
            ),
            13 => 
            array (
                'id' => 28,
            'email_name' => 'Listing Updated (Admin) - User Notify',
                'admin_email' => 9,
                'email_subject' => 'Care4me - Listing Updated',
                'email_body' => '<p>We have updated your listing on our system</p>',
                'archive' => 0,
                'updated_at' => '2026-03-02 13:32:02',
                'created_at' => '2026-03-02 13:32:02',
            ),
            14 => 
            array (
                'id' => 29,
            'email_name' => 'Provider Created (Admin) - User Notify',
                'admin_email' => 9,
                'email_subject' => 'Care4me - Provider Created',
                'email_body' => '<p>We have added your organisation to our system</p>',
                'archive' => 0,
                'updated_at' => '2026-03-02 17:50:25',
                'created_at' => '2026-03-02 17:50:25',
            ),
            15 => 
            array (
                'id' => 30,
            'email_name' => 'Provider Updated (Admin) - User Notify',
                'admin_email' => 9,
                'email_subject' => 'Care4me - Organsation Updated',
                'email_body' => '<p>We have updated your organisation details on our system.</p>',
                'archive' => 0,
                'updated_at' => '2026-03-02 17:54:33',
                'created_at' => '2026-03-02 17:51:26',
            ),
        ));
        
        
    }
}