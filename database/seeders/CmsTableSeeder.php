<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms')->delete();
        
        \DB::table('cms')->insert(array (
            0 => 
            array (
                'box_id' => 3,
                'box_title' => 'Registering your Listing',
                'box_content' => '<p><span style=\\"font-size: medium;\\">To register your organisation with Care4me, please complete this form. On completion of your registration you will receive an email with your login details to create your FREE listing on the site.</span></p>',
                'box_type' => 0,
            ),
            1 => 
            array (
                'box_id' => 4,
                'box_title' => 'Registration Success',
                'box_content' => '<p>Your registration was successful. Please check your email for your login details.</p>
<p><span>If you don\\\'t receive an email please check your Junk folder.</span></p>',
                'box_type' => 0,
            ),
            2 => 
            array (
                'box_id' => 7,
                'box_title' => 'Registering as a Volunteer',
                'box_content' => '<p>To register your skills on the Volunteer Bank please complete the form.</p>
<p>Your Information will remain with us and you will be contacted by us with details of any organisation who wishes to speak to you about volunteering with them.</p>
',
                'box_type' => 0,
            ),
            3 => 
            array (
                'box_id' => 11,
                'box_title' => 'Volunteer Bank',
                'box_content' => '<h2>Volunteer Bank</h2>
<p>If you have skills you would like to share through volunteering your time and cannot find a suitable opportunity then please register by clicking button below.<br /></strong></p>
<p>Volunteering is a great way to get involved and connect with your local community. Giving your time, skills and commitment can make a real difference to you and the local people, organisations and environment around you.</p>
<p>People volunteer for a wide variety of reasons and volunteering can be a way of:</p>
<ul>
<li>Improving your health and wellbeing by getting involved, making new friends and feeling valued and appreciated by those you help</li>
<li>Connecting and giving back to the local community and making a real difference to local people and your local area</li>
<li>Learning and demonstrating new skills or using existing professional skills and knowledge to help others</li>
<li>Trying out opportunities that could lead to employment and getting â€˜job readyâ€™ or  testing new career pathways</li>
<li>Enhancing your CV and gaining a reference</li>
</ul>
<p><strong> Your Information will remain with us and you will be contacted by us with details of any organisation who wishes to speak to you about volunteering with them.</strong></p>',
                'box_type' => 0,
            ),
            4 => 
            array (
                'box_id' => 12,
                'box_title' => 'Volunteer Opportunities',
                'box_content' => '<h2>Volunteer Opportunities</h2>
<p>To use our Volunteer Brokerage system to post your opportunities you must have first registered your Organisation on Care4me. To register your organisation clickÂ the button below.</p>
<p>Care4me will assist you to find the right volunteers for your roles by promoting your opportunities to a large number of potential volunteers from the local community and local businesses.</p>
<ul>
<li>You can manage your opportunities electronically, making changes as and when required</li>
<li>We can help you get the most out of your advert and get the right volunteers for your role</li>
<li>We can track the number of people who have viewed your advert, applied for your roles and we will keep in regular contact with you for feedback and updates</li>
<li>You can also search the Volunteer Bank for potential volunteers who could match your roles or inspire you to develop new roles depending on the skills and experience offered.</li>
</ul>
<p>To register your opportunities login with your service provider username and password, select â€˜My Care4meâ€™ then â€˜Volunteer Bankâ€™ in the menu, then follow the on screen instructions on how to get started.</p>',
                'box_type' => 0,
            ),
            5 => 
            array (
                'box_id' => 18,
                'box_title' => 'Volunteer Enquiry ',
                'box_content' => '<p>Are you interested in this volunteer&rsquo;s skill set and what they could bring to your organisation?</p>
<p>Please complete the form to contact us about this volunteer.</p>
<p>We will pass on your message and contact information to the prospective volunteer, so that they can contact you directly for more information about the role and your organisation.</p>',
                'box_type' => 0,
            ),
            6 => 
            array (
                'box_id' => 8,
                'box_title' => 'Volunteer Registration Successful',
                'box_content' => '<p>Thank you for registering as a Volunteer on Care4me.<br /> Your registration has been accepted.</p>',
                'box_type' => 0,
            ),
            7 => 
            array (
                'box_id' => 19,
                'box_title' => 'Volunteering Opportunity Enquiry ',
                'box_content' => '<p>Are you interested in volunteering with this organisation?</p>
<p>Would you like to find out more about this role?</p>
<p>Please complete the form to contact us about this opportunity.</p>
<p>We will pass on your message and contact information to this organisation <span style=\\"text-decoration: underline;\\">only</span>, so that they can contact you directly with more information about the role and organisation.</p>
<p>If you would just like to ask our administrators a question about the role, start your message with â€˜ENQUIRYâ€™ and we will get in touch to respond to your query.</p>',
                'box_type' => 0,
            ),
            8 => 
            array (
                'box_id' => 21,
                'box_title' => 'Creating Your Listing',
                'box_content' => '<p>Thank you for registering to set up a listing with Care4me. We are delighted that you have found us on the web and we want to make your experience of usingÂ this siteÂ as straightforward as possible.Â There will be guidance on how to fill in the different sections of your page in the blue text boxes to the right of the screen. <br /><br />To get started, click on the green buttons to â€˜Create new listingâ€™ or â€˜Editâ€™ your current listings.</p>',
                'box_type' => 0,
            ),
            9 => 
            array (
                'box_id' => 22,
                'box_title' => 'Privacy Policy',
                'box_content' => '<h2>Privacy Notice</h2>
<p>We aim to help our subscribers understand how and why we collect your organisations or your personal information and what we do with this information.  This notice explains the decision  that you can make about the information we hold<br/>
For purposes of this notice “you” in this notice includes your organisation and you (individual).</p>

<h3>What is personal information?</h3>  
<p>Personal information is information that identifies you as an individual and relates to you.  This includes your contact details.</p>

<h3>How and Why we use your personal information.</h3>
<p>Below are examples of the different ways in which we use personal information and where this information comes from. Whilst the majority of information you provide to us is on a voluntary basis some of it is may be mandatory i.e. booking onto training events etc.  In order to comply with data protection law, we will inform you when you have a choice in this.  Our main reason for using your personal information is to provide information and services to you.</p>

<p>We obtain information about you in the following ways:</p>

<ul>
<li>•	Entry onto our multi lingual community directory.  We provide a free listing space for you to publicise your services to the general public, local authority and public commissioners, and other voluntary organisations.  You will be given a secure password to access your listing at any time and to make any relevant changes, and to add and delete entries.</li>   
<li>•	E bulletin subscription.  We provide a free ebulletin throughout the year which gives information on our services, booking information for our training and the services of other organisations together with funding news and articles that we feel may be of interest to you.</li>
<li>•	Email notices.  From time to time we may email you with a special interest item.  This may be priority access to forthcoming training etc.</li>
<li>•	Booking forms.  When booking onto our training events you will be asked to provide information regarding contact details.  We use Eventbrite for the majority of our bookings and for payment purposes.  Lifetimes does not accept credit card payments directly.</li>     
<li>•	Financial information.  When you enter into a purchase contract for our services you will be sent an invoice and your information will be entered onto our accounts system.</li>
<li>•	Volunteer brokerage.  As part of our past volunteer brokerage services and the current service provided via Care4me, you will provide us with information regarding either the volunteer placement you wish to advertise or the placement that you would like to be considered for.</li> 
<li>•	Specialist events/services.  You may attend or have attended one of our many specialist events and provided your contact details as part of your participation.</li>
</ul> 



<h3>Sharing personal information with third parties</h3>
<p>In accordance with our legal obligations, we may share statistical information with the local authorities and funders.  However we would not disclose individual records and contact details to any third party unless they were carefully selected advisors assisting us in fulfilling our obligations to help run our services i.e. ICT contractors. and, only if this was relevant to their work or if there was a requirement for us to disclose to other government bodies i.e. HMRC, charity commission etc.</p>

<h3>Our legal grounds for using your information:</h3>   
<p>This section contains information about the legal basis that we are relying on when handling your information.</p>

<h4>Legitimate interests</h4>
<p>This means that the processing is necessary for legitimate interests except where the processing is unfair to you.  Lifetimes Charity  relies on legitimate interests for most of the ways in which it uses your information.   Lifetimes charity has a legitimate interest in :</p>
<ul>
	<li>•	Providing information, bespoke services and educational services to you</li>
	<li>•	Promoting the aims and objects of the charity to you.</li>
	<li>•	Ensuring that all relevant and legal obligations of the charity are complied with.</li> 
</ul>

<h4>Consent</h4> 
<p>We may ask for your consent to use your information in certain ways.  If we ask for your consent to use your personal information you can withdraw this consent at any time.  Any use of your information before you withdraw remains valid.</p>

<h4>How long do we keep your information:</h4> 
<p>In line with the new GDPR and previous Data Protection rulings, we will only keep your information as long as we feel it is relevant, we will only keep information that is needed for us to provide services to you and you have the right to ask us to delete your information at any time.</p>

<h4>What decisions can you make about your information</h4>
<p>From May 2018 data protection legislation gives you a number of rights regarding your information.  Some of these rights build on your existing rights and are as follows:</p><ul>

	<li>•	If information is incorrect you can ask us to correct it</li>
<li>•	You can also ask what information we hold about you and be provided with a copy.  We will also give you extra information such as why we use this information about you, where it came from and what types of people we have sent it to</li>
<li>•	You can ask us to delete the information that we hold about you in certain circumstances. E.g. where we no longer need the information</li>
<li>•	You can ask us to send you, or another organisation, certain types of information about you in a format that can be ready by computer</li>
<li>•	Our use of information about you may be restricted in some cases. For example, if you tell us that the information is inaccurate we can only use it for limited purposes while we check its accuracy</li>
<li>•	You can object to direct marketing, although we never sell your information to any third parties for direct marketing purposes or other reason.</li>
<li>•	Claim compensation for damages caused by breach of data protection regulations.  If you consider that we have not acted properly when using your  personal information, then please contact us so that we can investigate your claim.  If you feel that we have not looked into your complaint correctly you can contact the Information Commissioner’s Office:ico.org.uk</li>
</ul>

',
                'box_type' => 2,
            ),
            10 => 
            array (
                'box_id' => 23,
                'box_title' => 'Organisation Address',
                'box_content' => '<p>This section allows you to give one or more&nbsp;address that potential service users might use to access or contact your organisation. Please use a full post code so that we can generate an accurate map to help people find you.</p>',
                'box_type' => 2,
            ),
            11 => 
            array (
                'box_id' => 24,
                'box_title' => 'Service Categories',
                'box_content' => '<p>Use this section to select the buttons and categories on Care4me that your service will be listed under. Please be as specific as possible, that way people using the search facility will find exactly what they are looking for. Please don&rsquo;t tick all options, find the categories that really define your services.</p>',
                'box_type' => 2,
            ),
            12 => 
            array (
                'box_id' => 25,
                'box_title' => 'Service Areas',
                'box_content' => '<p>Think about where your service can be accessed and which parts of the borough it is available to. If your services are available to the whole of Wandsworth, London or can only be accessed from a neighbouring borough the &lsquo;All Wandsworth&rsquo;, &lsquo;All London&rsquo; or &lsquo;other London Borough&rsquo; options are available for you.</p>',
                'box_type' => 2,
            ),
            13 => 
            array (
                'box_id' => 26,
                'box_title' => 'Creating Your Page',
                'box_content' => '<p>This is the main body of text for your page on Care4me.</p>
<p>You can expand on the information in your short listing and provide as much detail as you think your clients will need. There is space for up to three sections of text and three images to illustrate your services. We suggest that you also include links to additional information on your website such as current price lists etc.</p>
<p>Text should first be planned in word then pasted into your listing by pressing Ctrl &amp;V together on your keyboard. Images can be uploaded in the same way as your logo in section 1.</p>
<p>Once you are happy with the text and images you would like to include save your work and click &lsquo;Preview&rsquo; to see how your page will look to people using the site.</p>',
                'box_type' => 2,
            ),
            14 => 
            array (
                'box_id' => 27,
                'box_title' => 'Registering your volunteer opportunity',
                'box_content' => '<p>Care4me Community Directory will assist you to find the right volunteers for your roles by promoting your opportunities to a large number of potential volunteers from the local community and local businesses.</p>
<p>Lifetimes has 35 yearsâ€™ experience of volunteer brokerage, supporting and capacity building the Voluntary and Community Sector in the borough and continues to deliver Best Practice in Volunteer Management Training and the Experts in Volunteering and Experts in Evaluation Programmes.</p>
<p>To get started, click on â€˜Add opportunityâ€™ or â€˜editâ€™ the ones already on the site. Â </p>
<p>If you have any queries or require further assistance, you can contact the Lifetimes team at <a href=\\"mailto:assistant@life-times.org.uk\\">assistant@life-times.org.uk</a></p>',
                'box_type' => 3,
            ),
            15 => 
            array (
                'box_id' => 28,
                'box_title' => 'Create Volunteer Opportunity',
                'box_content' => '<p>To add your opportunity to the Care4me Volunteering Platform enter a title and short description of the role to attract prospective volunteers. Include the most important information about the opportunity and the essential requirements of your potential volunteer.</p>
<p>To indicate when applicants should be available to volunteer, please enter the start date and end date -where relevant- for the opportunity, then tick the checkboxes to give more details about the role&rsquo;s regular days and times.</p>',
                'box_type' => 3,
            ),
            16 => 
            array (
                'box_id' => 20,
                'box_title' => 'Volunteer Opportunity Enquiry Sent',
                'box_content' => '<p>Thank you for your enquiry, we will get back to you as soon as possible.</p>',
                'box_type' => 0,
            ),
        ));
        
        
    }
}