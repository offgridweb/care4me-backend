<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Cms2TableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms2')->delete();
        
        \DB::table('cms2')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cms_title' => 'Main Disclaimer',
                'cms_content' => '<h4>Disclaimer and Liability limitation</h4>
<h4>Content</h4>
<p>The content of the website (care4me.org.uk) includes text, software, graphics and advertisements provided by 7_Clouds, its affiliates, third parties and registered members of the website. Service providers are solely responsible for the content of their own listings/pages on the website. 7_Clouds makes no representations that the content will be complete, accurate, reliable, suitable or up to date and that your access to the website will be free from interruption or errors and the website or the hosting servers are free of viruses or any other harmful components. Visitors who use this website and rely on any information do so at their own risk.</p>
<h4>Agreement</h4>
<p>You understand and agree that 7_Clouds does not exercise control over users of the Website (including registered members who post Directory listings and/or Classified advertisements) and is not liable for their behaviour including information that is offensive, discriminatory, defamatory, illegal or in violation of third party rights. Further, you understand that 7_Clouds has no responsibility for the use of content in its Directories and Classifieds by persons engaged in mass email or spamming behaviour.</p>
<h4>Exclusions</h4>
<p>To the extent allowable by law 7_Clouds and its affiliates exclude; All warranties, circumstances and terms implied by regulation, general law or worldwide convention including, without restriction, any and all implied warranties with respect to merchantability, suitability of purpose, title and non-infringement; and liability to you or any person in respect of any loss or damage arising out of or in connection with any use of the website or the information on or provided through the website, as well as, without limitation, all liability in respect of consequential, incidental, indirect, extraordinary, punitive or exemplary damages (such as loss of profits or loss or corruption of data and loss of goodwill) even if it has been advised of the likelihood of such loss or damage. Where the law implies any phrase in relation to your use of the website or any understanding arising out of your accessing the website and that law prohibits exclusion of that phrase, then that phrase is included. If and to the amount permitted by law, however, 7_Clouds  and its affiliates limit their liability for breach of such phrases to the resupply of services.</p>
<h4>Information supplied by third parties</h4>
<p>7_Clouds provides www.care4me.org.uk as a vehicle for voluntary and community groups and providers of care services to display information about their organisations and services. 7_ Clouds takes no responsibility for the content that third parties include in their listings. Third parties that register with www.care4me.org.uk to advertise their organisations or services through the site are solely responsible for the content they submit and for any errors, omissions or assertions made regarding their services.</p>
<h4>Linked websites</h4>
<p>The website contains hyperlinks to internet websites. We are not accountable nor do we have control of their content. Hyperlinks are provided to you as a convenience only and 7_Clouds: <br />a. does not endorse, sponsor or approve of any information or materials on these linked websites;<br />b. does not make any warranties or representations regarding the quality, accuracy, merchantability or fitness for purpose of any material on websites linked to or from this website;<br />c. does not make any warranties or representations that information or materials on other websites to which this website is linked<br />do not infringe the intellectual rights of any person anywhere in the world; and<br />d. does not authorize the infringement of any intellectual property rights contained in information or materials in other websites by linking this website to those other websites.</p>
',
            ),
            1 => 
            array (
                'id' => 2,
                'cms_title' => 'Self- Help Disclaimer',
                'cms_content' => '<h4>Disclaimer and Liability limitation</h4>
<h4>Content</h4>
<p>The content of the website (care4me.org.uk) includes text, software, graphics and advertisements provided by Lifetimes Charity, its affiliates, third parties and registered members of the website. Service providers are solely responsible for the content of their own listings/pages on the website. Lifetimes Charity makes no representations that the content will be complete, accurate, reliable, suitable or up to date and that your access to the website will be free from interruption or errors and the website or the hosting servers are free of viruses or any other harmful components. Visitors who use this website and rely on any information do so at their own risk.</p>
<h4>Agreement</h4>
<p>You understand and agree that Lifetimes Charity does not exercise control over users of the Website (including registered members who post Directory listings and/or Classified advertisements) and is not liable for their behaviour including information that is offensive, discriminatory, defamatory, illegal or in violation of third party rights. Further, you understand that Lifetimes Charity has no responsibility for the use of content in its Directories and Classifieds by persons engaged in mass email or spamming behaviour.</p>
<h4>Exclusions</h4>
<p>To the extent allowable by law Lifetimes Charity and its affiliates exclude; All warranties, circumstances and terms implied by regulation, general law or worldwide convention including, without restriction, any and all implied warranties with respect to merchantability, suitability of purpose, title and non-infringement; and liability to you or any person in respect of any loss or damage arising out of or in connection with any use of the website or the information on or provided through the website, as well as, without limitation, all liability in respect of consequential, incidental, indirect, extraordinary, punitive or exemplary damages (such as loss of profits or loss or corruption of data and loss of goodwill) even if it has been advised of the likelihood of such loss or damage. Where the law implies any phrase in relation to your use of the website or any understanding arising out of your accessing the website and that law prohibits exclusion of that phrase, then that phrase is included. If and to the amount permitted by law, however, Lifetimes Charity and its affiliates limit their liability for breach of such phrases to the resupply of services.</p>
<h4>Information supplied by third parties</h4>
<p>Lifetimes provides www.care4me.org.uk as a vehicle for voluntary and community groups and providers of care services to display information about their organisations and services. Lifetimes takes no responsibility for the content that third parties include in their listings. Third parties that register with www.care4me.org.uk to advertise their organisations or services through the site are solely responsible for the content they submit and for any errors, omissions or assertions made regarding their services.</p>
<h4>Linked websites</h4>
<p>The website contains hyperlinks to internet websites. We are not accountable nor do we have control of their content. Hyperlinks are provided to you as a convenience only and Lifetimes Charity: <br />a. does not endorse, sponsor or approve of any information or materials on these linked websites;<br />b. does not make any warranties or representations regarding the quality, accuracy, merchantability or fitness for purpose of any material on websites linked to or from this website;<br />c. does not make any warranties or representations that information or materials on other websites to which this website is linked<br />do not infringe the intellectual rights of any person anywhere in the world; and<br />d. does not authorize the infringement of any intellectual property rights contained in information or materials in other websites by linking this website to those other websites.</p>',
            ),
            2 => 
            array (
                'id' => 3,
                'cms_title' => 'Terms & Conditions',
                'cms_content' => '<p><strong>Terms &amp; Conditions</strong></p>
<p><br />In continuing to register and/or use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which govern the relationship Lifetimes Charity has with you (the&nbsp;\'lister\')&nbsp;in relation to this website. If you disagree with any part of these terms and conditions, please do not continue to use the website.</p>
<p><br />&bull;&nbsp;It is the lister\'s responsibility to ensure that the information provided is correct and complete and that any service charges included in their listing are up-to-date and current.</p>
<p>&nbsp;&bull;&nbsp;It is the lister\'s responsibility to manage their listing and keep the information updated.</p>
<p>&nbsp;&bull;&nbsp;Lifetimes Charity cannot accept any responsibility or liability for inaccurate information provided, incorrectly provided supporting documentation and any consequences thereof.</p>
<p>&nbsp;&bull;&nbsp;Lifetimes Charity accepts no responsibility for the information provided on this directory in terms of the areas of expertise in which the lister works. It is the lister\'s responsibility to have appropriate evidence to support any services described in their listing.</p>
<p>&nbsp;&bull;&nbsp;No warranty or assurance is given by us or our officers that listing your organisation on the care4me website will result in business for you, or that enquiries made through your listing will be appropriate. Furthermore, no warranties are given that your listing will be accessed or viewed by any number or class of users.</p>
<p>&nbsp;&bull;&nbsp;We reserve the right to remove your listing and delete your registration with us without notice and for any reason. We have editorial freedom over this website and reserve the right to refuse to publish inappropriate information or records. When we cancel your listing because of this or a breach of the terms and conditions of website use, no refund of any subscription payment will be made.</p>
<p>&nbsp;</p>
<p><strong>Healthcare Professionals</strong></p>
<p>&nbsp;</p>
<p>Please note by using this password we ask you to abide by our terms and conditions of the use by a healthcare professional and do not disclose your password to any other party without our permission.</p>
<p>&nbsp;Printing of information from the website is also restricted to use by a patient/professional activity and &nbsp;reproduction of the website to any other party is forbidden.</p>
<p>&nbsp;</p>
<p>The term "Lifetimes Charity", "us" or "we" refers to the owner of the website whose registered office is 100 Wandsworth High Street, London, SW18 4LA. Our company is registered in England number 7065550.</p>',
            ),
            3 => 
            array (
                'id' => 4,
                'cms_title' => 'Privacy Policy',
                'cms_content' => '<p>We aim to help our subscribers understand how and why we collect your organisations or your personal information and what we do with this information.  This notice explains the decision  that you can make about the information we hold<br/>
For purposes of this notice "you" in this notice includes your organisation and you (individual).</p>

<h3>What is personal information?</h3>  
<p>Personal information is information that identifies you as an individual and relates to you.  This includes your contact details.</p>

<h3>How and Why we use your personal information.</h3>
<p>Below are examples of the different ways in which we use personal information and where this information comes from. Whilst the majority of information you provide to us is on a voluntary basis some of it is may be mandatory i.e. booking onto training events etc.  In order to comply with data protection law, we will inform you when you have a choice in this.  Our main reason for using your personal information is to provide information and services to you.</p>

<p>We obtain information about you in the following ways:</p>

<ul>
<li>Entry onto our multi lingual community directory.  We provide a free listing space for you to publicise your services to the general public, local authority and public commissioners, and other voluntary organisations.  You will be given a secure password to access your listing at any time and to make any relevant changes, and to add and delete entries.</li>   
<li>E bulletin subscription.  We provide a free ebulletin throughout the year which gives information on our services, booking information for our training and the services of other organisations together with funding news and articles that we feel may be of interest to you.</li>
<li>Email notices.  From time to time we may email you with a special interest item.  This may be priority access to forthcoming training etc.</li>
<li>Booking forms.  When booking onto our training events you will be asked to provide information regarding contact details.  We use Eventbrite for the majority of our bookings and for payment purposes.  Lifetimes does not accept credit card payments directly.</li>     
<li>Financial information.  When you enter into a purchase contract for our services you will be sent an invoice and your information will be entered onto our accounts system.</li>
<li>Volunteer brokerage.  As part of our past volunteer brokerage services and the current service provided via Care4me, you will provide us with information regarding either the volunteer placement you wish to advertise or the placement that you would like to be considered for.</li> 
<li>Specialist events/services.  You may attend or have attended one of our many specialist events and provided your contact details as part of your participation.</li>
</ul> 



<h3>Sharing personal information with third parties</h3>
<p>In accordance with our legal obligations, we may share statistical information with the local authorities and funders.  However we would not disclose individual records and contact details to any third party unless they were carefully selected advisors assisting us in fulfilling our obligations to help run our services i.e. ICT contractors. and, only if this was relevant to their work or if there was a requirement for us to disclose to other government bodies i.e. HMRC, charity commission etc.</p>

<h3>Our legal grounds for using your information:</h3>   
<p>This section contains information about the legal basis that we are relying on when handling your information.</p>

<h4>Legitimate interests</h4>
<p>This means that the processing is necessary for legitimate interests except where the processing is unfair to you.  Lifetimes Charity  relies on legitimate interests for most of the ways in which it uses your information.   Lifetimes charity has a legitimate interest in :</p>
<ul>
	<li>Providing information, bespoke services and educational services to you</li>
	<li>Promoting the aims and objects of the charity to you.</li>
	<li>Ensuring that all relevant and legal obligations of the charity are complied with.</li> 
</ul>

<h4>Consent</h4> 
<p>We may ask for your consent to use your information in certain ways.  If we ask for your consent to use your personal information you can withdraw this consent at any time.  Any use of your information before you withdraw remains valid.</p>

<h4>How long do we keep your information:</h4> 
<p>In line with the new GDPR and previous Data Protection rulings, we will only keep your information as long as we feel it is relevant, we will only keep information that is needed for us to provide services to you and you have the right to ask us to delete your information at any time.</p>

<h4>What decisions can you make about your information</h4>
<p>From May 2018 data protection legislation gives you a number of rights regarding your information.  Some of these rights build on your existing rights and are as follows:</p><ul>

	<li>If information is incorrect you can ask us to correct it</li>
<li>You can also ask what information we hold about you and be provided with a copy.  We will also give you extra information such as why we use this information about you, where it came from and what types of people we have sent it to</li>
<li>You can ask us to delete the information that we hold about you in certain circumstances. E.g. where we no longer need the information</li>
<li>You can ask us to send you, or another organisation, certain types of information about you in a format that can be ready by computer</li>
<li>Our use of information about you may be restricted in some cases. For example, if you tell us that the information is inaccurate we can only use it for limited purposes while we check its accuracy</li>
<li>You can object to direct marketing, although we never sell your information to any third parties for direct marketing purposes or other reason.</li>
<li>Claim compensation for damages caused by breach of data protection regulations.  If you consider that we have not acted properly when using your  personal information, then please contact us so that we can investigate your claim.  If you feel that we have not looked into your complaint correctly you can contact the Information Commissioner\'s Office:ico.org.uk</li>
</ul>

',
            ),
            4 => 
            array (
                'id' => 5,
                'cms_title' => 'Registering Your Organisation',
                'cms_content' => '<h1>Registering Your Organisation</h1>
<p>Are you a charity, self help group, local or national organisation providing services or activities for the community in Wandsworth?</p>
<p>Register now for your FREE Care4me profile.</p>
<p>This will enable you to create a listing on the site to be viewed by the local community, other organisations and healthcare professionals in the borough. You will also have access to the Care4me Volunteering Platform to list your opportunities or search our Volunteer Bank.</p>
<p>To get started, click on the &lsquo;register&rsquo; button below and follow the on-screen instructions.</p>',
            ),
        ));
        
        
    }
}