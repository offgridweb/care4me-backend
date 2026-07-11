<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BoxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('boxes')->delete();
        
        \DB::table('boxes')->insert(array (
            0 => 
            array (
                'box_id' => 1,
                'box1_content' => '<h1><strong>Welcome to Care4Me</strong></h1>
<h2>what we are - care4me is a new community directory for organisations in Wandsworth offering services and activities to local people.</h2>
<h2>what we do -providing a web based serachable directory of care and self-help services for both health professionals and the genral public</h2>
<h2>how do i become listed?</h2>
<p>creating a listing is easy and straightforward and takes only a few minutes.</p>
<p>click here to register your service </p>',
                'box2_content' => '<h1>Care4me Services Directory</h1>
<p>click on the service category boxes to view search for a particular service.</p>
<p>&nbsp;</p>
<p>services are split into sections to helo you find the service you need.</p>
<p>&nbsp;</p>
<p>the map will show you the location of the services in your area</p>
<p>&nbsp;</p>
<p>to see the full details of any service just click on the business card listing.</p>',
                'box3_content' => '<p><span style="font-size: medium;"><strong>Welcome to care4me!</strong></span><br /><br /><span style="font-family: verdana,geneva; font-size: small;"><span style="font-family: verdana,geneva; font-size: small;">We have launched as a community directory for organisations in Wandsworth that offer services and activities to local people. We started out wishing to provide a directory of care services, but quickly realised that the amount of activities and services available in the borough expand beyond social and health care into wellbeing and fun!</span></span></p>
<p>&nbsp;</p>
<p style="text-align: left;"><span style="font-family: verdana,geneva; font-size: small;">We are&nbsp;always updating this system&nbsp;in an effort to improve the facility and to keep it as user-friendly as possible.</span></p>
<p>&nbsp;</p>
<p style="text-align: left;"><span style="font-family: verdana,geneva; font-size: small;">If you are an organisation and would like to list your services and your organisation, please <a href="/sign_up.php" target="_self">click here</a>.</span></p>
<p>&nbsp;&nbsp;</p>
<p style="text-align: left;"><span style="font-family: verdana,geneva; font-size: small;">If you are a local person looking for help, care, services or something to do in your leisure time, please search the directory using the drop down menus across the top, or by clicking your way through the image categories. Happy browsing!</span></p>
<p>&nbsp;</p>',
            ),
        ));
        
        
    }
}