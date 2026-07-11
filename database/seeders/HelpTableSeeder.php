<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HelpTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('help')->delete();
        
        \DB::table('help')->insert(array (
            0 => 
            array (
                'help_id' => 1,
                'help_title' => 'Missing help',
                'help_content' => '<p>Missing Content</p>',
            ),
            1 => 
            array (
                'help_id' => 3,
                'help_title' => 'Becoming a Service Provider',
                'help_content' => '<p><strong>Register Your Services</strong><br />&nbsp;</p><p>Many thanks for using the care4me Community Directory. To register, please complete the details on the form below.<br /><br />Once you have registered you will be&nbsp;sent your Username and a password to the e-mail address you have given us.&nbsp;Use these details to log-in to care4me and you can then change your password&nbsp;to something more memorable in the Edit Profile tab.<br /><br />Please see our <a href="http://www.life-times.org.uk/assets/documents/care4me-user-guide%20" target="_blank">User Guide</a> if you need any help to set up your listing.<br /><br /></p>',
            ),
            2 => 
            array (
                'help_id' => 2,
                'help_title' => 'User Help',
                'help_content' => '<p class="MsoNormal" style="margin: 0cm 0cm 10pt;"><span style="font-family: verdana,geneva;"><span style="font-size: small;"><strong>Where is this?? User Help test.</strong> </span></span></p>
<p class="MsoNormal" style="margin: 0cm 0cm 10pt;">We are delighted that you found us on the web.<span style="mso-spacerun: yes;">&nbsp;</span>We want to make your experience as easy as possible by helping you to find the type of personal services that you want.<span style="mso-spacerun: yes;">&nbsp;</span>All of our services are provided by organisations that want to help you and help improve the quality of your life.<span style="mso-spacerun: yes;">&nbsp;</span>On this website you will find tried and trusted local services which are able to meet your personal needs.<span style="mso-spacerun: yes;">&nbsp;</span></p>
<p class="MsoNormal" style="margin: 0cm 0cm 10pt;"><span style="font-family: verdana,geneva;"><span style="font-size: small;"><span style="mso-spacerun: yes;"><br /></span>You can find the information you want in a number of different ways.&nbsp;You can find information by clicking on the pictures under the "services" category and then seeing what types of services are being offered to you and then choosing which one you want.<span style="mso-spacerun: yes;">&nbsp;</span>Alternatively, you can find information by clicking on the picture under the "clients" category and then seeing what types of services are on offer to you and then choosing which one you want.<br /><br /></span><span style="font-size: small;">If there is another type of service or information which you think should be on this directory, please let us know by dropping us an e-mail.<span style="mso-spacerun: yes;">&nbsp; </span>We always welcome ways to improve the service that we provide for you.<span style="mso-spacerun: yes;">&nbsp; <br /><br /></span>One of the things that we will be doing in the future will be adding a community page to the website so you can keep up-to-date with what other people are thinking and talking about when it comes to care services. <br /></span></span></p>
<p class="MsoNormal" style="margin: 0cm 0cm 10pt;"><span style="font-family: verdana,geneva; font-size: medium;"><span style="font-size: medium;"><br /><span style="font-size: small;">You can contact us at <a href="mailto:info@life-times.org.uk">info@life-times.org.uk</a> marking your e mail "care4me" so that it can be dealt with promptly. </span><br /><br /><br /></span></span></p>
<h3><span style="font-family: verdana,geneva;"><strong><span style="font-size: medium;">Service Provider Help</span></strong></span></h3>
<p><span style="font-family: verdana,geneva;"><span style="font-size: small;">There are three simple steps to promoting your services on <a>www.care4me.org.uk</a>:<br /><br /></span><span style="font-size: small;">1.&nbsp; Register your organisation on the website as a service provider by clicking on the </span><span style="font-size: small;">"</span>To Register click <a class="admin_text_title" href="/sign_up.php">here</a>"</span></p>
<p><span style="font-family: verdana,geneva;"><span style="font-size: small;">button and then entering your contact details, including making up your own username on the registration form;<br /><br /></span><span style="font-size: small;">2.&nbsp; You will receive an e-mail confirming your registration, together with a password which you will need to enter on the website to gain access to your webpage; <br /><br /></span><span style="font-size: small;">3.&nbsp; Login to <a href="/">www.care4me.org.uk</a> using your username and password and then on the "edit listing&rdquo; tab enter text and images to create your listing.&nbsp;</span></span></p>',
            ),
            3 => 
            array (
                'help_id' => 5,
                'help_title' => 'Missing help',
                'help_content' => '<p>Missing Content</p>',
            ),
        ));
        
        
    }
}