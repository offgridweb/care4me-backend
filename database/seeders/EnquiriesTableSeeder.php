<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EnquiriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('enquiries')->delete();
        
        \DB::table('enquiries')->insert(array (
            0 => 
            array (
                'id' => 2,
                'forename' => 'Roderick',
                'surname' => 'Balgarnie',
                'company' => '',
                'email' => 'rod@offgridwebdesign.co.uk',
                'tel' => '07795 311709',
                'message' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate turpis eu libero semper auctor. Suspendisse vel tellus sit amet nisl egestas ultricies. Curabitur elit arcu, aliquam et fringilla a, blandit ac nisl. Aliquam aliquam eros eget nisl sagittis interdum. Morbi pretium vitae dolor ut varius. ',
                'type' => 6,
                'ref' => '232CFM',
                'status' => 0,
                'date_recv' => '2015-05-03 23:49:47',
            ),
            1 => 
            array (
                'id' => 3,
                'forename' => 'John',
                'surname' => 'Doe',
                'company' => 'Acme Ltd',
                'email' => 'rod@offgridwebdesign.co.uk',
                'tel' => '0207 335 358',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate turpis eu libero semper auctor. Suspendisse vel tellus sit amet nisl egestas ultricies. Curabitur elit arcu, aliquam et fringilla a, blandit ac nisl. Aliquam aliquam eros eget nisl sagittis interdum. Morbi pretium vitae dolor ut varius.',
                'type' => 5,
                'ref' => 'CFM252',
                'status' => 0,
                'date_recv' => '2015-05-03 23:59:38',
            ),
            2 => 
            array (
                'id' => 4,
                'forename' => 'Roderick',
                'surname' => 'Balgarnie',
                'company' => 'Test 2312',
                'email' => 'rod@offgridwebdesign.co.uk',
                'tel' => '0207 335 358',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate turpis eu libero semper auctor. Suspendisse vel tellus sit amet nisl egestas ultricies. Curabitur elit arcu, aliquam et fringilla a, blandit ac nisl. Aliquam aliquam eros eget nisl sagittis interdum. Morbi pretium vitae dolor ut varius. Donec porta tincidunt ipsum, nec egestas lectus dapibus eu. Curabitur hendrerit turpis ',
                'type' => 5,
                'ref' => 'CFM253',
                'status' => 0,
                'date_recv' => '2015-07-22 23:12:51',
            ),
            3 => 
            array (
                'id' => 5,
                'forename' => 'Roderick',
                'surname' => 'Balgarnie',
                'company' => '',
                'email' => 'rod@offgridwebdesign.co.uk',
                'tel' => '0207 335 358',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate turpis eu libero semper auctor. Suspendisse vel tellus sit amet nisl egestas ultricies. Curabitur elit arcu, aliquam et fringilla a, blandit ac nisl. Aliquam aliquam eros eget nisl sagittis interdum. Morbi pretium vitae dolor ut varius. Donec porta tincidunt ipsum, nec egestas lectus dapibus eu. Curabitur hendrerit turpis sed nunc finibus lacinia. Ut eget est sit amet eros feugiat mattis',
                'type' => 6,
                'ref' => '244CFM',
                'status' => 0,
                'date_recv' => '2015-07-22 23:14:11',
            ),
            4 => 
            array (
                'id' => 6,
                'forename' => 'z',
                'surname' => 'sati',
                'company' => 'lifr',
                'email' => 'info@life-times.org.uk',
                'tel' => '02088752845',
                'message' => 'hghghg',
                'type' => 5,
                'ref' => 'CFM203',
                'status' => 0,
                'date_recv' => '2015-11-02 14:09:46',
            ),
            5 => 
            array (
                'id' => 7,
                'forename' => 'zainab',
                'surname' => 'soso',
                'company' => 'lifetimes',
                'email' => 'info@life-times.org.uk',
                'tel' => '02088752846',
                'message' => 'test one ',
                'type' => 5,
                'ref' => 'CFM203',
                'status' => 0,
                'date_recv' => '2015-12-10 10:25:03',
            ),
            6 => 
            array (
                'id' => 8,
                'forename' => 'Jamie',
                'surname' => 'Test',
                'company' => '',
                'email' => 'assistant@life-times.org.uk',
                'tel' => '020 88752849',
                'message' => 'testing testing',
                'type' => 6,
                'ref' => '282CFM',
                'status' => 0,
                'date_recv' => '2015-12-14 14:26:36',
            ),
            7 => 
            array (
                'id' => 9,
                'forename' => 'Rod',
                'surname' => 'Test',
                'company' => 'Test Org',
                'email' => 'rod@fionaharrold.com',
                'tel' => '07795 311709',
                'message' => 'Id meis labores vituperatoribus vis. Aeque graece singulis sea ne. At ullum putent scribentur mei. His id veri vidisse.

Ne nisl atqui tibique nec. Mea sint aeterno ei. Pri ut modus commodo democritum, nobis utinam mandamus qui ut. Illum iudico facete eos ex, no nonumes democritum vis. Nostrum explicari reformidans usu ex, facer officiis mea ad. Possim temporibus est an, in erroribus disputationi eam, ad sint epicurei persequeris vim.',
                'type' => 5,
                'ref' => 'CFM312',
                'status' => 0,
                'date_recv' => '2016-01-03 13:20:13',
            ),
            8 => 
            array (
                'id' => 10,
                'forename' => 'Rod',
                'surname' => 'Balgarnie',
                'company' => '',
                'email' => 'rod@offgridwebdesign.co.uk',
                'tel' => '0207 335 358',
                'message' => 'Test Rod',
                'type' => 6,
                'ref' => '282CFM',
                'status' => 0,
                'date_recv' => '2016-01-03 21:08:31',
            ),
            9 => 
            array (
                'id' => 11,
                'forename' => 'zainab',
                'surname' => 'soso',
                'company' => 'lifo',
                'email' => 'info@life-times.org.uk',
                'tel' => '02056787897',
                'message' => 'asdasdasd',
                'type' => 5,
                'ref' => 'CFM315',
                'status' => 0,
                'date_recv' => '2016-01-22 14:16:47',
            ),
            10 => 
            array (
                'id' => 12,
                'forename' => 'zainab',
                'surname' => 'sati',
                'company' => '',
                'email' => 'info@life-times.org.uk',
                'tel' => '02089746336',
                'message' => 'test volunteering oppor',
                'type' => 6,
                'ref' => '282CFM',
                'status' => 0,
                'date_recv' => '2016-01-26 09:58:06',
            ),
            11 => 
            array (
                'id' => 13,
                'forename' => 'zainab',
                'surname' => 'sati',
                'company' => 'zainab',
                'email' => 'info@life-times.org.uk',
                'tel' => '07799364567',
                'message' => 'test about volunteer inquiry 29-02-15',
                'type' => 5,
                'ref' => 'CFM315',
                'status' => 0,
                'date_recv' => '2016-02-29 11:14:30',
            ),
            12 => 
            array (
                'id' => 14,
                'forename' => 'test opp 22-3 receiving apply ',
                'surname' => 'ddd',
                'company' => '',
                'email' => 'zsati@hotmail.com',
                'tel' => '07799456342',
                'message' => 'test  receiving apply to opp',
                'type' => 6,
                'ref' => '268CFM',
                'status' => 0,
                'date_recv' => '2016-03-22 10:37:22',
            ),
            13 => 
            array (
                'id' => 15,
                'forename' => 'layla',
                'surname' => 'kamel',
                'company' => 'life vol enq',
                'email' => 'info@life-times.org.uk',
                'tel' => '07799564585',
                'message' => 'inquiry about volunteer 23-03-2016 ',
                'type' => 5,
                'ref' => 'CFM321',
                'status' => 0,
                'date_recv' => '2016-03-23 12:47:16',
            ),
            14 => 
            array (
                'id' => 16,
                'forename' => 'zainab',
                'surname' => 'dd',
                'company' => '',
                'email' => 'info@life-times.org.uk',
                'tel' => '07799364567',
                'message' => 'test apply for opp 23-03-2016',
                'type' => 6,
                'ref' => '268CFM',
                'status' => 0,
                'date_recv' => '2016-03-23 12:58:10',
            ),
            15 => 
            array (
                'id' => 17,
                'forename' => 'Rod',
                'surname' => 'Test',
                'company' => '',
                'email' => 'rod@text.com',
                'tel' => '0207 335 358',
                'message' => 'Test Message',
                'type' => 6,
                'ref' => '303CFM',
                'status' => 0,
                'date_recv' => '2016-04-03 18:29:27',
            ),
            16 => 
            array (
                'id' => 18,
                'forename' => 'Rod',
                'surname' => 'Balgarnie',
                'company' => '',
                'email' => 'rod@offgridwebdesign.co.uk',
                'tel' => '0207 335 358',
                'message' => 'Test Message',
                'type' => 6,
                'ref' => '303CFM',
                'status' => 0,
                'date_recv' => '2016-04-03 22:20:23',
            ),
            17 => 
            array (
                'id' => 19,
                'forename' => 'Rod',
                'surname' => 'Balgarnie',
                'company' => '',
                'email' => 'rod@fionaharrold.com',
                'tel' => '0207 335 358',
                'message' => 'Test 12324325',
                'type' => 6,
                'ref' => '303CFM',
                'status' => 0,
                'date_recv' => '2016-04-03 23:00:42',
            ),
            18 => 
            array (
                'id' => 20,
                'forename' => 'Rod',
                'surname' => 'Balgarnie',
                'company' => 'Offgridweb Design',
                'email' => 'rod@offgridwebdesign.co.uk',
                'tel' => '0207 335 358',
                'message' => 'Test Messafge',
                'type' => 5,
                'ref' => 'CFM326',
                'status' => 0,
                'date_recv' => '2016-04-04 00:01:37',
            ),
            19 => 
            array (
                'id' => 21,
                'forename' => '',
                'surname' => '',
                'company' => '',
                'email' => '',
                'tel' => '',
                'message' => '',
                'type' => 0,
                'ref' => '',
                'status' => 0,
                'date_recv' => '2016-04-13 13:12:44',
            ),
            20 => 
            array (
                'id' => 22,
                'forename' => 'zozo',
                'surname' => 'Sati',
                'company' => 'sata',
                'email' => 'zsati@hotmail.com',
                'tel' => '07799456342',
                'message' => 'test vol inq 17-4-2016',
                'type' => 5,
                'ref' => 'CFM333',
                'status' => 0,
                'date_recv' => '2016-04-17 16:24:01',
            ),
            21 => 
            array (
                'id' => 23,
                'forename' => 'zaina',
                'surname' => 'Sati',
                'company' => '',
                'email' => 'zsati@hotmail.com',
                'tel' => '07799456342',
                'message' => 'test apply for opp 17-04-2016',
                'type' => 6,
                'ref' => '301CFM',
                'status' => 0,
                'date_recv' => '2016-04-17 16:26:36',
            ),
            22 => 
            array (
                'id' => 24,
                'forename' => 'Rod',
                'surname' => 'Balgarnie',
                'company' => 'TEST',
                'email' => 'rod@test.com',
                'tel' => '07795 311709',
                'message' => 'Testing Times',
                'type' => 5,
                'ref' => 'CFM333',
                'status' => 0,
                'date_recv' => '2016-04-19 22:03:37',
            ),
            23 => 
            array (
                'id' => 25,
                'forename' => 'Jamie',
                'surname' => 'Test',
                'company' => 'Lifetimes',
                'email' => 'selfhelpwandsworth@life-times.org.uk',
                'tel' => '02088752849',
                'message' => 'test volunteer enquiry',
                'type' => 5,
                'ref' => 'CFM333',
                'status' => 0,
                'date_recv' => '2016-04-20 13:46:30',
            ),
            24 => 
            array (
                'id' => 26,
                'forename' => 'Jamie',
                'surname' => 'Test',
                'company' => '',
                'email' => 'assistant@life-times.org.uk',
                'tel' => '02088752849',
                'message' => 'Testing Opportunity Enquiry',
                'type' => 6,
                'ref' => '301CFM',
                'status' => 0,
                'date_recv' => '2016-04-20 13:52:08',
            ),
            25 => 
            array (
                'id' => 27,
                'forename' => 'Maher',
                'surname' => 'Test',
                'company' => '',
                'email' => 'maher.uk@gmail.com',
                'tel' => '02088752849',
                'message' => 'test',
                'type' => 6,
                'ref' => '301CFM',
                'status' => 0,
                'date_recv' => '2016-04-21 11:55:33',
            ),
            26 => 
            array (
                'id' => 28,
                'forename' => 'zina vol inquiry',
                'surname' => 'vol inquiry',
                'company' => 'inqui about volunteer',
                'email' => 'zsati@hotmail.com',
                'tel' => '07799564585',
                'message' => 'cheeking the vol inquiry 25-04-2016',
                'type' => 5,
                'ref' => 'CFM346',
                'status' => 0,
                'date_recv' => '2016-04-25 11:43:19',
            ),
            27 => 
            array (
                'id' => 29,
                'forename' => 'zainab second iquiry check',
                'surname' => 'vol inq 2 check',
                'company' => 'vol inquiry check 25-04-2016',
                'email' => 'info@life-times.org.uk',
                'tel' => '07799364567',
                'message' => 'test vol innq2',
                'type' => 5,
                'ref' => 'CFM346',
                'status' => 0,
                'date_recv' => '2016-04-25 11:49:24',
            ),
            28 => 
            array (
                'id' => 30,
                'forename' => 'zainab apply for opp',
                'surname' => 'zainab apply for opp',
                'company' => '',
                'email' => 'zsati@hotmail.com',
                'tel' => '02105454545',
                'message' => 'zainab apply for opp 25-04-2016',
                'type' => 6,
                'ref' => '301CFM',
                'status' => 0,
                'date_recv' => '2016-04-25 12:37:48',
            ),
            29 => 
            array (
                'id' => 31,
                'forename' => 'Z',
                'surname' => 'S',
                'company' => 'Zai',
                'email' => 'Info@life-times.prg.uk',
                'tel' => '08788653876',
                'message' => 'Test from phone 25-04 vol inq',
                'type' => 5,
                'ref' => 'CFM344',
                'status' => 0,
                'date_recv' => '2016-04-25 13:02:31',
            ),
            30 => 
            array (
                'id' => 32,
                'forename' => 'Z',
                'surname' => 'Sa',
                'company' => '',
                'email' => 'Zsati@hotmail.com',
                'tel' => '0876533222',
                'message' => 'Test opp from iPhone 25-4',
                'type' => 6,
                'ref' => '301CFM',
                'status' => 0,
                'date_recv' => '2016-04-25 13:06:48',
            ),
            31 => 
            array (
                'id' => 33,
                'forename' => 'Zoz',
                'surname' => 'Zoz',
                'company' => 'Zoz',
                'email' => 'Zsati@hotmail.com',
                'tel' => '0876543221',
                'message' => 'Check vol',
                'type' => 5,
                'ref' => 'CFM344',
                'status' => 0,
                'date_recv' => '2016-04-25 13:08:27',
            ),
            32 => 
            array (
                'id' => 34,
                'forename' => 'Diane',
                'surname' => 'Smith',
                'company' => '',
                'email' => 'didensmith@hotmail.com',
                'tel' => '07527297834',
                'message' => 'I am an experienced Manager who currently works as a volunteer Programme officer for DBCUK in collaboration with Team London. ',
                'type' => 6,
                'ref' => '106CFM',
                'status' => 0,
                'date_recv' => '2016-04-27 14:29:30',
            ),
            33 => 
            array (
                'id' => 35,
                'forename' => 'Julie',
                'surname' => 'West',
                'company' => '',
                'email' => 'Jeanette.Dawkins@family-action.org.uk',
                'tel' => '07587229224',
                'message' => 'I am very much interested in volunteering by working with older people in their home  Job Ref no: 283CFM. I am honest, reliable, caring and a patient person. I live in the Tooting area and is currently unemployed due to health problems. It can be very boring and lonely at home and I feel I can be helpful in supporting older people in their home. I am physical able to do this role. I believe it is important to give something back to the community. ',
                'type' => 6,
                'ref' => '283CFM',
                'status' => 0,
                'date_recv' => '2016-04-28 13:47:03',
            ),
            34 => 
            array (
                'id' => 36,
                'forename' => 'Julie',
                'surname' => 'West',
                'company' => '',
                'email' => 'Jeanette.Dawkins@family-action.org.uk',
                'tel' => '07587229224',
                'message' => 'I live in Tooting area and I am interested in volunteering as a Lunch Assistant Ref:number 185CFM. I am reliable, honest and friendly person. I would like to give back to the community. ',
                'type' => 6,
                'ref' => '185CFM',
                'status' => 0,
                'date_recv' => '2016-04-28 14:02:06',
            ),
            35 => 
            array (
                'id' => 37,
                'forename' => '',
                'surname' => '',
                'company' => '',
                'email' => '',
                'tel' => '',
                'message' => '',
                'type' => 0,
                'ref' => '',
                'status' => 0,
                'date_recv' => '2016-05-09 02:25:38',
            ),
            36 => 
            array (
                'id' => 38,
                'forename' => 'Natalie ',
                'surname' => 'Tompkins',
                'company' => '',
                'email' => 'natalietompkins@hotmail.com',
                'tel' => '07703535103',
                'message' => 'Hi all,

I was wondering if you are still on the look out for some volunteers for this ( REF 241CFM). If so, I would  be very willing to help out. 

I look forward to hearing from you.
 
Many thanks 

Natalie ',
                'type' => 6,
                'ref' => '241CFM',
                'status' => 0,
                'date_recv' => '2016-06-13 15:20:18',
            ),
            37 => 
            array (
                'id' => 39,
                'forename' => 'Sharon',
                'surname' => 'Flatman',
                'company' => '',
                'email' => 'Sharonflatman@hotmail.com',
                'tel' => '07535418086',
                'message' => 'I want work with old people iam hard person ',
                'type' => 6,
                'ref' => '283CFM',
                'status' => 0,
                'date_recv' => '2016-06-20 16:23:10',
            ),
            38 => 
            array (
                'id' => 40,
                'forename' => 'Sharon',
                'surname' => 'Flatman',
                'company' => '',
                'email' => 'Sharonflatman@hotmail.com',
                'tel' => '07535418086',
                'message' => 'I want work with old people iam hard person ',
                'type' => 6,
                'ref' => '283CFM',
                'status' => 0,
                'date_recv' => '2016-06-20 16:23:14',
            ),
            39 => 
            array (
                'id' => 41,
                'forename' => 'Liam',
                'surname' => 'Quinn',
                'company' => '',
                'email' => 'josie-hannaford@together-uk.org',
                'tel' => '07880191299',
                'message' => 'Hello,

I have a service user very interested in some volunteering opportunities surrounding admin and building my confidence around this. I am looking forward to speaking with you to discuss. 

Kind regards,
Josie ',
                'type' => 6,
                'ref' => '108CFM',
                'status' => 0,
                'date_recv' => '2016-06-28 12:44:59',
            ),
            40 => 
            array (
                'id' => 42,
                'forename' => 'josie',
                'surname' => 'hannaford',
                'company' => '',
                'email' => 'josie-hannaford@together-uk.org',
                'tel' => '07880191299',
                'message' => 'Hello there,

I am a support worker at a mental health charity called Together. I have a service user who is very interested in this role and has his own mental health and physical health difficulties. He would really like to start volunteering to give him more structure to his week.

I look forward to hearing from you
',
                'type' => 6,
                'ref' => '208CFM',
                'status' => 0,
                'date_recv' => '2016-06-28 12:56:54',
            ),
            41 => 
            array (
                'id' => 43,
                'forename' => 'Julie',
                'surname' => 'Critten',
                'company' => '',
                'email' => 'julie@professionals.uk.com',
                'tel' => '01273 736826',
                'message' => 'ENQUIRY

Good Afternoon

I have a student who is looking to volunteer for a Charity and I wondered how I could apply for this role on her behalf?

Professionals UK have been successfully placing EU students in internships around the UK for over 10 years. I have an Italian student who has experience working with mental illness and personality disorders and who is available to volunteer for 6 weeks starting from the 25th of July.  Could you let me know who I could pass on her CV and cover letter to?

I look forward to hearing from you.

Kind regards

Julie 
',
                'type' => 6,
                'ref' => '331CFM',
                'status' => 0,
                'date_recv' => '2016-07-08 12:00:36',
            ),
            42 => 
            array (
                'id' => 44,
                'forename' => 'Anna',
                'surname' => 'Linwood',
                'company' => '',
                'email' => 'annalinwood@hotmail.com',
                'tel' => '07958169427',
                'message' => 'Hi,

I am a 21 year old student at The University of Edinburgh looking for something useful to do with my free time over the summer and wishing to give back to the community. I have done quite a bit of volunteering in the past, however not since I left school 3 years ago, and I would love the opportunity to help disadvantaged people in the area in any way I can.
I am a very friendly and caring person, and throw myself into everything I can, which is why I think I have the skills to become part of your volunteer team.

I look forward to hearing from you,

Anna',
                'type' => 6,
                'ref' => '209CFM',
                'status' => 0,
                'date_recv' => '2016-07-08 15:16:57',
            ),
            43 => 
            array (
                'id' => 45,
                'forename' => 'Rose Mary Ntongo ',
                'surname' => 'Walusimbi ',
                'company' => '',
                'email' => 'rosemary1911@hotmail.com',
                'tel' => '0785261847',
                'message' => 'I would like to volunteer for the organisation. ',
                'type' => 6,
                'ref' => '182CFM',
                'status' => 0,
                'date_recv' => '2016-08-05 11:17:15',
            ),
            44 => 
            array (
                'id' => 46,
                'forename' => 'Rose Mary Nongo ',
                'surname' => 'Walusimbi ',
                'company' => '',
                'email' => 'rosemary1911@hotmail.com',
                'tel' => '07852618407',
                'message' => 'please l need to volunteer urgently. I would like to utilise my knowledge and skills. thank you. from Rose mary Walusimbi ',
                'type' => 6,
                'ref' => '268CFM',
                'status' => 0,
                'date_recv' => '2016-08-05 11:31:39',
            ),
            45 => 
            array (
                'id' => 47,
                'forename' => 'Annabel',
                'surname' => 'Matthews',
                'company' => '',
                'email' => 'annabelxxx.matthews@googlemail.com',
                'tel' => '07975538595',
                'message' => 'Am very interested in this role. Enquiry: where is it based? ',
                'type' => 6,
                'ref' => '263CFM',
                'status' => 0,
                'date_recv' => '2016-08-16 16:02:25',
            ),
            46 => 
            array (
                'id' => 48,
                'forename' => 'Annabel',
                'surname' => 'Matthews',
                'company' => '',
                'email' => 'annabelxxx.matthews@googlemail.com',
                'tel' => '07975538595',
                'message' => 'Very interested in role.',
                'type' => 6,
                'ref' => '337CFM',
                'status' => 0,
                'date_recv' => '2016-08-16 16:04:59',
            ),
            47 => 
            array (
                'id' => 49,
                'forename' => 'gawsa',
                'surname' => 'nada',
                'company' => '',
                'email' => 'gawsa@live.com',
                'tel' => '07709275014',
                'message' => 'hello I am interested in this ',
                'type' => 6,
                'ref' => '328CFM',
                'status' => 0,
                'date_recv' => '2016-08-22 16:12:34',
            ),
            48 => 
            array (
                'id' => 50,
                'forename' => 'gawsa',
                'surname' => 'nada',
                'company' => '',
                'email' => 'gawsa.ns@gmail.com',
                'tel' => '07709275014',
                'message' => 'hello I am intressted in this ',
                'type' => 6,
                'ref' => '301CFM',
                'status' => 0,
                'date_recv' => '2016-08-22 16:14:04',
            ),
            49 => 
            array (
                'id' => 51,
                'forename' => 'Laila',
                'surname' => 'Francis',
                'company' => '',
                'email' => 'francis_laila@yahoo.co.uk',
                'tel' => '07428 228 18',
                'message' => 'Hi
I came across this whilst advertising my own volunteer roll! I have managed housing services at YOI Feltham since 2007 and have a real interest in young peoples housing. I have a legal background (LLB & LPC)  I work part time and would only be available on a Wednesday Morning, but could draft documents from home. Do let me know if this could fit your requirements.
Kind regards
Laila',
                'type' => 6,
                'ref' => '269CFM',
                'status' => 0,
                'date_recv' => '2016-09-09 13:06:31',
            ),
            50 => 
            array (
                'id' => 52,
                'forename' => 'Patricia',
                'surname' => 'Laws',
                'company' => '',
                'email' => 'p.laws@hotmail.co.uk',
                'tel' => '07950502217',
                'message' => 'Enquiry is this position available still?',
                'type' => 6,
                'ref' => '115CFM',
                'status' => 0,
                'date_recv' => '2016-09-13 12:44:19',
            ),
            51 => 
            array (
                'id' => 53,
                'forename' => 'Tenin',
                'surname' => 'Sangare',
                'company' => '',
                'email' => 'teninsangare1998@hotmail.co.uk',
                'tel' => '07462863087',
                'message' => 'I am 18years old and I am doing my last year of health and social care at South Thames college. I have to do once a week for my placement with a minimum of 200hours. 

I would be grateful if I can get contacted back.

Thank you',
                'type' => 6,
                'ref' => '343CFM',
                'status' => 0,
                'date_recv' => '2016-09-22 13:46:42',
            ),
            52 => 
            array (
                'id' => 54,
                'forename' => 'Tenin',
                'surname' => 'Sangare',
                'company' => '',
                'email' => 'teninsangare1998@hotmail.co.uk',
                'tel' => '07462863087',
                'message' => 'I am 18years old and I am doing my last year of health and social care at South Thames college. I have to do once a week for my placement with a minimum of 200hours. 

I would be grateful if I can get contacted back.

Thank you',
                'type' => 6,
                'ref' => '343CFM',
                'status' => 0,
                'date_recv' => '2016-09-23 08:06:53',
            ),
            53 => 
            array (
                'id' => 55,
                'forename' => 'Tenin',
                'surname' => 'Sangare',
                'company' => '',
                'email' => 'teninsangare1998@hotmail.co.uk',
                'tel' => '07462863087',
                'message' => 'To whom it my concern, I am studying my last year oh health and social care so I have to do 200 hours of work experience. I am able to do Friday and probably Saturday also. I would be grateful to be contacted back.

Thank you',
                'type' => 6,
                'ref' => '317CFM',
                'status' => 0,
                'date_recv' => '2016-09-25 08:52:35',
            ),
            54 => 
            array (
                'id' => 56,
                'forename' => 'Tenin',
                'surname' => 'Sangare',
                'company' => '',
                'email' => 'teninsangare1998@hotmail.co.uk',
                'tel' => '07462863087',
                'message' => 'To whom it may concern, 

I am 18 years old studying my last year of health and social care at south Thames college in Wandsworth. I have to complete 200 hours of work experience in order to complete my course. However I am interested in working with young people and helping them to make a change.

I would be very grateful if I can get contacted back.',
                'type' => 6,
                'ref' => '106CFM',
                'status' => 0,
                'date_recv' => '2016-09-25 08:55:16',
            ),
            55 => 
            array (
                'id' => 57,
                'forename' => 'Anne',
                'surname' => 'Vallely',
                'company' => '',
                'email' => 'anne.vallely@live.co.uk',
                'tel' => '07976276710',
                'message' => 'ENQUIRY

I am a qualified lawyer and I used to work for a company which went insolvent.  I am not currently working and would like to do something useful with my time.

I would like to use my skills either to teach English or do legal advisory work.

Anne
',
                'type' => 6,
                'ref' => '173CFM',
                'status' => 0,
                'date_recv' => '2016-09-30 12:44:42',
            ),
            56 => 
            array (
                'id' => 58,
                'forename' => 'Marcia',
                'surname' => 'Gaynor',
                'company' => '',
                'email' => 'mgmarjandco@gmail.com',
                'tel' => '07956475441',
                'message' => 'Inquiring for my sister Valerie: who was a Ta for a school in wandsworth  28 years doing dancing, and teaching.

Thank you',
                'type' => 6,
                'ref' => '346CFM',
                'status' => 0,
                'date_recv' => '2016-10-12 17:28:21',
            ),
            57 => 
            array (
                'id' => 59,
                'forename' => 'Marcia',
                'surname' => 'Gaynor',
                'company' => '',
                'email' => 'mgmarjandco@gmail.com',
                'tel' => '07956475441',
                'message' => 'Inquiring ',
                'type' => 6,
                'ref' => '212CFM',
                'status' => 0,
                'date_recv' => '2016-10-12 17:29:39',
            ),
            58 => 
            array (
                'id' => 60,
                'forename' => 'Marcia',
                'surname' => 'Gaynor',
                'company' => '',
                'email' => 'mgmarjandco@gmail.com',
                'tel' => '07956475441',
            'message' => 'Inquiring for my sister Valerie (buddy) with her.

Thanks ',
            'type' => 6,
            'ref' => '317CFM',
            'status' => 0,
            'date_recv' => '2016-10-12 20:50:23',
        ),
        59 => 
        array (
            'id' => 61,
            'forename' => 'Marcia',
            'surname' => 'Gaynor',
            'company' => '',
            'email' => 'mgmarjandco@gmail.com',
            'tel' => '07956475441',
            'message' => 'Inquiring ',
            'type' => 6,
            'ref' => '196CFM',
            'status' => 0,
            'date_recv' => '2016-10-12 21:00:39',
        ),
        60 => 
        array (
            'id' => 62,
            'forename' => 'Marcia',
            'surname' => 'Gaynor',
            'company' => '',
            'email' => 'mgmarjandco@gmail.com',
            'tel' => '07956475441',
            'message' => 'Inquiring ',
            'type' => 6,
            'ref' => '262CFM',
            'status' => 0,
            'date_recv' => '2016-10-12 21:01:20',
        ),
        61 => 
        array (
            'id' => 63,
            'forename' => 'Mat',
            'surname' => 'Croft',
            'company' => 'Royal Trinity Hospice',
            'email' => 'mcroft@royaltrinityhospice.london',
            'tel' => '0207 787 106',
            'message' => 'Good afternoon

Royal Trinity Hospice is looking for volunteers to help our friendly, busy patient transport team. We need escorts to support our patients with a terminal illness in the minibus on their journeys, and also drivers who can use their own car to pick up patients. We have many patients living across Wandsworth who come into Trinity for activities, support groups and appointments. All we need is an extra pair of hands to help them get here!

If you are a people person who is reliable and safety conscious, you could be a great fit for the team.

If you are interested please give me a call and I can give you more details.

All the best
Mat Croft - Outpatients Volunteer Coordinator
0207 787 1064',
            'type' => 5,
            'ref' => 'CFM333',
            'status' => 0,
            'date_recv' => '2016-10-21 15:22:19',
        ),
        62 => 
        array (
            'id' => 64,
            'forename' => 'Mat ',
            'surname' => 'Croft',
            'company' => 'Royal Trinity Hospice',
            'email' => 'mcroft@royaltrinityhospice.london',
            'tel' => '0207 787 106',
            'message' => 'Good afternoon

Royal Trinity Hospice is looking for volunteers to help our friendly, busy patient transport team. We need escorts to support our patients with a terminal illness in the minibus on their journeys, and also drivers who can use their own car to pick up patients. We have many patients living across Wandsworth who come into Trinity for activities, support groups and appointments. All we need is an extra pair of hands to help them get here!

If you are a people person who is reliable and safety conscious, you could be a great fit for the team.

If you are interested please give me a call and I can give you more details.

All the best
Mat Croft - Outpatients Volunteer Coordinator
0207 787 1064',
            'type' => 5,
            'ref' => 'CFM295',
            'status' => 0,
            'date_recv' => '2016-10-21 15:22:29',
        ),
        63 => 
        array (
            'id' => 65,
            'forename' => 'Mat',
            'surname' => 'Croft',
            'company' => 'Royal Trinity Hospice',
            'email' => 'mcroft@royaltrinityhospice.london',
            'tel' => '0207 787 106',
            'message' => 'Good afternoon

Royal Trinity Hospice is looking for volunteers to help our friendly, busy patient transport team. We need escorts to support our patients with a terminal illness in the minibus on their journeys, and also drivers who can use their own car to pick up patients. We have many patients living across Wandsworth who come into Trinity for activities, support groups and appointments. All we need is an extra pair of hands to help them get here!

If you are a people person who is reliable and safety conscious, you could be a great fit for the team.

If you are interested please give me a call and I can give you more details.

All the best
Mat Croft - Outpatients Volunteer Coordinator
0207 787 1064',
            'type' => 5,
            'ref' => 'CFM339',
            'status' => 0,
            'date_recv' => '2016-10-21 15:22:38',
        ),
        64 => 
        array (
            'id' => 66,
            'forename' => 'Mat',
            'surname' => 'Croft',
            'company' => 'Royal Trinity Hospice',
            'email' => 'mcroft@royaltrinityhospice.london',
            'tel' => '0207 787 106',
            'message' => 'Good afternoon

Royal Trinity Hospice is looking for volunteers to help our friendly, busy patient transport team. We need escorts to support our patients with a terminal illness in the minibus on their journeys, and also drivers who can use their own car to pick up patients. We have many patients living across Wandsworth who come into Trinity for activities, support groups and appointments. All we need is an extra pair of hands to help them get here!

If you are a people person who is reliable and safety conscious, you could be a great fit for the team.

If you are interested please give me a call and I can give you more details.

All the best
Mat Croft - Outpatients Volunteer Coordinator
0207 787 1064',
            'type' => 5,
            'ref' => 'CFM350',
            'status' => 0,
            'date_recv' => '2016-10-21 15:22:46',
        ),
        65 => 
        array (
            'id' => 67,
            'forename' => 'Mat',
            'surname' => 'Croft',
            'company' => 'Royal Trinity Hospice',
            'email' => 'mcroft@royaltrinityhospice.london',
            'tel' => '0207 787 106',
            'message' => 'Good afternoon

Royal Trinity Hospice is looking for volunteers to help our friendly, busy patient transport team. We need escorts to support our patients with a terminal illness in the minibus on their journeys, and also drivers who can use their own car to pick up patients. We have many patients living across Wandsworth who come into Trinity for activities, support groups and appointments. All we need is an extra pair of hands to help them get here!

If you are a people person who is reliable and safety conscious, you could be a great fit for the team.

If you are interested please give me a call and I can give you more details.

All the best
Mat Croft - Outpatients Volunteer Coordinator
0207 787 1064',
            'type' => 5,
            'ref' => 'CFM368',
            'status' => 0,
            'date_recv' => '2016-10-21 15:22:55',
        ),
        66 => 
        array (
            'id' => 68,
            'forename' => '',
            'surname' => '',
            'company' => '',
            'email' => '',
            'tel' => '',
            'message' => '',
            'type' => 0,
            'ref' => '',
            'status' => 0,
            'date_recv' => '2016-10-22 05:47:59',
        ),
        67 => 
        array (
            'id' => 69,
            'forename' => 'Corrine',
            'surname' => 'Ovenden',
            'company' => 'volunteer ',
            'email' => 'dan_2471@live.co.uk',
            'tel' => '07943962706',
            'message' => 'I enjoy cleaning, making beds and looking after very sick animals, i enjoy doing task to task to work a high sanded work ability ',
            'type' => 5,
            'ref' => 'CFM375',
            'status' => 0,
            'date_recv' => '2016-11-10 12:15:26',
        ),
        68 => 
        array (
            'id' => 70,
            'forename' => 'bushra',
            'surname' => 'ahmed',
            'company' => '',
            'email' => 'bushra33@hotmail.co.uk',
            'tel' => '07951531796',
            'message' => 'I am a BA Education at University of Roehampton, in my last year. I am looking to gain some work experience. I was hoping to gain some experience.',
            'type' => 6,
            'ref' => '355CFM',
            'status' => 0,
            'date_recv' => '2016-11-11 18:51:01',
        ),
        69 => 
        array (
            'id' => 71,
            'forename' => 'Nima',
            'surname' => 'Hakami',
            'company' => '',
            'email' => 'nimahakami@yahoo.co.uk',
            'tel' => '07561888701',
            'message' => 'Good Morning 
i would like express an interest in this voluntering opportunty as i beleive that mindfulness cold be useful in many ways to this clinet group. 

I am available on Thursday all day and monday, tuesday and wednesday eveinings, from 7pm onwards. 

Looking forward to hearing from you

Kind regards 

Nima',
            'type' => 6,
            'ref' => '213CFM',
            'status' => 0,
            'date_recv' => '2016-11-14 11:40:11',
        ),
        70 => 
        array (
            'id' => 72,
            'forename' => 'Nima ',
            'surname' => 'Hakami',
            'company' => '',
            'email' => 'nimahakami@yahoo.co.uk',
            'tel' => '07561888701',
            'message' => 'Good Afternoon 

I would like to express an interest in this volunteeing opportunity. in the past i have done alot of work around meditation and mindfulness which i think will be very useful to your servicer users. 

i am also interested in doing outreach work in the local community. 

Thank you for taking the time to read and consider my application. 

Looking forward to hearing from you 

Nima ',
            'type' => 6,
            'ref' => '256CFM',
            'status' => 0,
            'date_recv' => '2016-11-14 11:43:41',
        ),
        71 => 
        array (
            'id' => 73,
            'forename' => 'Nima',
            'surname' => 'Hakami',
            'company' => '',
            'email' => 'nimahakami@yahoo.co.uk',
            'tel' => '07561888701',
            'message' => 'Good Morning 

i would like to express an interest in this volunteering opprtunity, I currently provide home made meals for the community with Grandville Community Kitchen and i would like to extend the culentary skills i have learnt to your service users. 

i also have a bbackground in mindfulness and medatition. 

i am available on Thursday during the day and monday, tuesday and wednesday evening from 7 pm onwards 

i would like to use this opportunity to thank you for taking the time to rconsider my application.

Kind regards 

Nima ',
            'type' => 6,
            'ref' => '246CFM',
            'status' => 0,
            'date_recv' => '2016-11-14 11:51:58',
        ),
        72 => 
        array (
            'id' => 74,
            'forename' => 'corrine',
            'surname' => 'ovenden',
            'company' => '',
            'email' => 'ovendenco@hotmail.com',
            'tel' => '07943962706',
            'message' => 'I would love to apply for something like this as i really enjoy working as a team and doing events. ',
            'type' => 6,
            'ref' => '372CFM',
            'status' => 0,
            'date_recv' => '2016-11-14 17:59:59',
        ),
        73 => 
        array (
            'id' => 75,
            'forename' => 'corrine',
            'surname' => 'ovenden',
            'company' => '',
            'email' => 'ovendenco@hotmail.com',
            'tel' => '07943962706',
            'message' => 'I would love to take on new skills and development on my work ',
            'type' => 6,
            'ref' => '151CFM',
            'status' => 0,
            'date_recv' => '2016-11-14 18:06:31',
        ),
        74 => 
        array (
            'id' => 76,
            'forename' => 'corrine',
            'surname' => 'ovenden',
            'company' => '',
            'email' => 'ovendenco@hotmail.com',
            'tel' => '07943962706',
            'message' => 'I would love to work with this as I am a very comfortable with it skills and enjoy communicating with customers.',
            'type' => 6,
            'ref' => '227CFM',
            'status' => 0,
            'date_recv' => '2016-11-14 18:37:34',
        ),
        75 => 
        array (
            'id' => 77,
            'forename' => 'janannagujja@outlook.com',
            'surname' => 'nagujja',
            'company' => 'Volunteer Enquiry CFM368',
            'email' => 'janannagujja@outlook.com',
            'tel' => '07506663991',
            'message' => '-',
            'type' => 5,
            'ref' => 'CFM368',
            'status' => 0,
            'date_recv' => '2016-11-21 12:12:06',
        ),
        76 => 
        array (
            'id' => 78,
            'forename' => 'janan',
            'surname' => 'nagujja',
            'company' => 'Mental health ',
            'email' => 'janannagujja@outlook.com',
            'tel' => '07506663991',
            'message' => '-',
            'type' => 5,
            'ref' => 'CFM369',
            'status' => 0,
            'date_recv' => '2016-11-21 12:12:47',
        ),
        77 => 
        array (
            'id' => 79,
            'forename' => 'janan',
            'surname' => 'nagujja',
            'company' => 'childcare',
            'email' => 'janannagujja@outlook.com',
            'tel' => '07506663991',
            'message' => '-',
            'type' => 5,
            'ref' => 'CFM307',
            'status' => 0,
            'date_recv' => '2016-11-21 12:14:08',
        ),
        78 => 
        array (
            'id' => 80,
            'forename' => 'Semira',
            'surname' => 'SAID',
            'company' => '',
            'email' => '1322550@student.south-thames.ac.uk',
            'tel' => '07944 671 58',
            'message' => 'I woud like to be considered for this volunteering oppirtunity because i want to gain expereince working with a kitchen or school.. 

i am available on monday mornings.

thank you for considering my application',
            'type' => 6,
            'ref' => '171CFM',
            'status' => 0,
            'date_recv' => '2016-11-24 15:12:41',
        ),
        79 => 
        array (
            'id' => 81,
            'forename' => 'Sian',
            'surname' => 'Nelson',
            'company' => '',
            'email' => 'sian.nelson@chelwest.nhs.uk',
            'tel' => '0203 315 854',
            'message' => 'Would like information on volunteering for the hospital',
            'type' => 6,
            'ref' => '154CFM',
            'status' => 0,
            'date_recv' => '2016-11-28 11:06:14',
        ),
        80 => 
        array (
            'id' => 82,
            'forename' => 'Yishebah',
            'surname' => 'Baht Gavriel',
            'company' => 'T N C',
            'email' => 'Yishebah@nta-tnc.co.uk',
            'tel' => '0208 767 161',
            'message' => 'Dear CARE4ME Team,

We are interested in this Volunteer.
Please give us contact to this candidate.

Kind Regards   

 

         Yishebah Baht Gavriel – Operations & Assistant Centre Manager
          Tooting Neighbourhood Centre
          28 Glenburnie Road
          Tooting, London SW17 7PJ
          Tel: 020 8 767 1619

           www.nta-tnc.co.uk

The Tooting Neighbourhood Centre is a leading health and social care agency that is regulated by the Care Quality Commission (CQC).  a Professional Counselling Service, a Film & Book Club, and The Hope Project which helps people to recover from mental illness.
',
            'type' => 5,
            'ref' => 'CFM364',
            'status' => 0,
            'date_recv' => '2016-12-08 13:03:26',
        ),
        81 => 
        array (
            'id' => 83,
            'forename' => 'Sarah ',
            'surname' => 'Gentles',
            'company' => 'Baked Bean Education Charity',
            'email' => 'sarah.education@bakedbeancharity.com',
            'tel' => '07889967044',
            'message' => 'We urgently need someone to help to decorate the home of  a single mum with five children who is facing huge social care issues at the moment.
Mum has moderate learning difficulties and the children also have Special Educational Needs.
The house really needs a coat of paint throughout.
Many thanks 
Regards
Sarah Gentles


',
            'type' => 5,
            'ref' => 'CFM318',
            'status' => 0,
            'date_recv' => '2016-12-14 11:38:08',
        ),
        82 => 
        array (
            'id' => 84,
            'forename' => 'Alessia',
            'surname' => 'Carbone',
            'company' => '',
            'email' => 'carbone_alessia@hotmail.it',
            'tel' => '07446526614',
            'message' => 'Good Morning 

i would like to express an interest in this volunterring opportunity. i am available on tuesday, thursday and friday mornings. 

thank you for taking the time to consider my application

Kind regards 

Alessia ',
            'type' => 6,
            'ref' => '381CFM',
            'status' => 0,
            'date_recv' => '2017-01-19 10:25:01',
        ),
        83 => 
        array (
            'id' => 85,
            'forename' => 'Alessia',
            'surname' => 'Carbone',
            'company' => '',
            'email' => 'carbone_alessia@hotmail.it',
            'tel' => '07446526614',
            'message' => 'Good Morning 

i would like to expressed an interest in this volunteering oppportunity. 

i am avaiable on tuesday, thursday and friday monrings. 

thank you for considering my application 

Kind regards 

Alessia ',
            'type' => 6,
            'ref' => '365CFM',
            'status' => 0,
            'date_recv' => '2017-01-19 10:28:23',
        ),
        84 => 
        array (
            'id' => 86,
            'forename' => 'Alessia',
            'surname' => 'Carbone',
            'company' => '',
            'email' => 'carbone_alessia@hotmail.it',
            'tel' => '07446526614',
            'message' => 'Good Morning 

i would like to express an interest in this volunteering opportunity. 

i am available on tuesday, thursday and friday mornings. 

thank you for considering my application 

kind regards 

Alessia ',
            'type' => 6,
            'ref' => '151CFM',
            'status' => 0,
            'date_recv' => '2017-01-19 10:31:46',
        ),
        85 => 
        array (
            'id' => 87,
            'forename' => 'Alessia',
            'surname' => 'Carbone',
            'company' => '',
            'email' => 'carbone_alessia@hotmail.it',
            'tel' => '07446526614',
            'message' => 'Good Morning 

i would like to express an interest in this volunteering opportunity. 

i am available on tuesday, thursday and friday mornings. 

thank you for considering my application 

kind regards 

Alessia ',
            'type' => 6,
            'ref' => '356CFM',
            'status' => 0,
            'date_recv' => '2017-01-19 10:33:51',
        ),
        86 => 
        array (
            'id' => 88,
            'forename' => 'Alessia',
            'surname' => 'Carbone',
            'company' => '',
            'email' => 'carbone_alessia@hotmail.it',
            'tel' => '07446526614',
            'message' => 'Good Morning 

i would like to express an interest in this volunteering opportunity. 

i am available on tuesday, thursday and friday mornings. 

thank you for considering my application 

kind regards 

Alessia ',
            'type' => 6,
            'ref' => '337CFM',
            'status' => 0,
            'date_recv' => '2017-01-19 10:36:01',
        ),
        87 => 
        array (
            'id' => 89,
            'forename' => 'Karina',
            'surname' => 'Morrison-Bell',
            'company' => '',
            'email' => 'karina.zaki@gmail.com',
            'tel' => '07983125842',
            'message' => 'To whom it may concern,

 My name is Karina, currently I’m studying Teaching and Training Adults at Canterbury Church Christ University (second year). I am looking for teaching experience as part of my course.

I am aiming for a long term career change into the education sector with my main field going to be health and life trainer. This concentrates on children and adults with disabilities, disorders and diseases and what can be done to ease their discomfort or help them manage them through their diet and forms of exercise.

I have a huge interest in Autism, ADHD, mental health issues and learning difficulties that’s why over ten years ago I studied Pedagogy with specialisation of special need and social rehabilitation. Although I never completed my studies I still have got the knowledge and passion that I would like to use in my future work.

At the moment I’m available every day from 8am until 1pm, apart from Wednesday as I have my university session on that day, I’m also free on afternoons and evenings on Thursdays and Fridays.
Please do not hesitate to contact me if you have any further questions. I am looking forward to hearing from you



Best Regards
Karina Morrison-Bell
07983125842 
',
            'type' => 6,
            'ref' => '172CFM',
            'status' => 0,
            'date_recv' => '2017-01-24 14:46:27',
        ),
        88 => 
        array (
            'id' => 90,
            'forename' => 'Antonia',
            'surname' => 'Pitt',
            'company' => '',
            'email' => 'antonia.pitt@gmail.com',
            'tel' => '07748496082',
        'message' => 'Hello! I am looking for volunteering opportunities involving arts and crafts. At my company we are given 8 hours/1 working day to volunteer with a charity and this sounds like a very worthwhile project. Is there some way that I can get involved? Initially I would be looking for one day volunteering (perhaps for myself and my team of 8 employees) but hopefully could continue in my spare time as well.
Please let me know if there is any way that I can help out!
All the best,
Antonia',
        'type' => 6,
        'ref' => '212CFM',
        'status' => 0,
        'date_recv' => '2017-02-01 10:44:31',
    ),
    89 => 
    array (
        'id' => 91,
        'forename' => 'Nicola',
        'surname' => 'Bowler',
        'company' => '',
        'email' => 'nicola.bowler01@hotmail.co.uk',
        'tel' => '07857682699',
        'message' => 'Hi, I am interesting in volunteering and helping the elderly community and I would like to find some more information about this. I am 20 years old and have applied for Nursing at university starting September 2017. I am in full time employment currently, but I work evenings and start usually at 5pm. I am a talkative person and would be happy to spend a few afternoons a week helping out my local community. ',
        'type' => 6,
        'ref' => '369CFM',
        'status' => 0,
        'date_recv' => '2017-02-06 17:13:56',
    ),
    90 => 
    array (
        'id' => 92,
        'forename' => 'Donna',
        'surname' => 'Barham',
        'company' => 'Kambala Residents Association',
        'email' => 'chair@kambala.org.uk',
        'tel' => '07507284291',
        'message' => 'We would be very interested in meeting this volunteer.',
        'type' => 5,
        'ref' => 'CFM382',
        'status' => 0,
        'date_recv' => '2017-03-01 10:27:06',
    ),
    91 => 
    array (
        'id' => 93,
        'forename' => 'Donna',
        'surname' => 'Barham',
        'company' => 'Kambala Residents Association',
        'email' => 'chair@kambala.org.uk',
        'tel' => '07507284291',
        'message' => 'We would definately be interested in speaking to this volunteer.',
        'type' => 5,
        'ref' => 'CFM364',
        'status' => 0,
        'date_recv' => '2017-03-01 10:32:33',
    ),
    92 => 
    array (
        'id' => 94,
        'forename' => 'Donna',
        'surname' => 'Barham',
        'company' => 'Kambala Residents Association',
        'email' => 'chair@kambala.org.uk',
        'tel' => '07507284291',
        'message' => 'We have a community garden and would like some expert help with it.',
        'type' => 5,
        'ref' => 'CFM357',
        'status' => 0,
        'date_recv' => '2017-03-01 10:43:22',
    ),
    93 => 
    array (
        'id' => 95,
        'forename' => 'Rianne',
        'surname' => 'Barnett',
        'company' => '',
        'email' => 'Barnettrianne6@gmail.com',
        'tel' => '07931258987',
        'message' => 'I am very organised always on time and i like cleaning things and keeping things tidy and im very good with computers as well. ',
        'type' => 6,
        'ref' => '390CFM',
        'status' => 0,
        'date_recv' => '2017-03-14 15:15:45',
    ),
    94 => 
    array (
        'id' => 96,
        'forename' => 'Rianne',
        'surname' => 'Barnett',
        'company' => '',
        'email' => 'Barnettrianne6@gmail.com',
        'tel' => '07931258987',
        'message' => 'I am ver puntucal anmd very organised and very friendly and just like helping people out.',
        'type' => 6,
        'ref' => '399CFM',
        'status' => 0,
        'date_recv' => '2017-03-14 15:21:40',
    ),
    95 => 
    array (
        'id' => 97,
        'forename' => 'Rianne',
        'surname' => 'Barnett',
        'company' => '',
        'email' => 'Barnettrianne6@gmail.com',
        'tel' => '07931258987',
        'message' => 'very organised i never give up always on time and i love helping people',
        'type' => 6,
        'ref' => '205CFM',
        'status' => 0,
        'date_recv' => '2017-03-14 15:25:27',
    ),
    96 => 
    array (
        'id' => 98,
        'forename' => 'Rianne',
        'surname' => 'Barnett',
        'company' => 'Like looking after animals',
        'email' => 'barnettrianne6@gmail.com',
        'tel' => '07931258987',
        'message' => 'very organised and like helping around and a very polite kindful person',
        'type' => 5,
        'ref' => 'CFM375',
        'status' => 0,
        'date_recv' => '2017-03-14 15:29:14',
    ),
    97 => 
    array (
        'id' => 99,
        'forename' => 'Sehrish',
        'surname' => 'Ahmad',
        'company' => '',
        'email' => 'Shelly203@hotmail.com',
        'tel' => '07548254561',
        'message' => 'In relation to your advertisement I would like to apply to for the vacancy as with the reference 151CFM',
        'type' => 6,
        'ref' => '151CFM',
        'status' => 0,
        'date_recv' => '2017-03-14 21:06:21',
    ),
    98 => 
    array (
        'id' => 100,
        'forename' => 'Sehrish',
        'surname' => 'Ahmad',
        'company' => '',
        'email' => 'Shelly203@hotmail.com',
        'tel' => '07548254561',
        'message' => 'In relation to your advwrtisement I saw I would like to volunteer as the vacancy of the reference 173CFM',
        'type' => 6,
        'ref' => '173CFM',
        'status' => 0,
        'date_recv' => '2017-03-14 21:09:24',
    ),
    99 => 
    array (
        'id' => 101,
        'forename' => 'Sehrish',
        'surname' => 'Ahmad',
        'company' => '',
        'email' => 'Shelly203@hotmail.com',
        'tel' => '07548254561',
        'message' => 'In relation to your advertisement I would like to apply as a volunteer in vacancy as the reference 151CFM',
        'type' => 6,
        'ref' => '151CFM',
        'status' => 0,
        'date_recv' => '2017-03-14 21:12:39',
    ),
    100 => 
    array (
        'id' => 102,
        'forename' => 'sehrish ',
        'surname' => 'Ahmad',
        'company' => '',
        'email' => 'Shelly203@hotmail.com',
        'tel' => '07548254561',
        'message' => 'In relation to your advertisement I would like to volunteer as a volunteer as vacancy in reference 356CFM',
        'type' => 6,
        'ref' => '356CFM',
        'status' => 0,
        'date_recv' => '2017-03-14 21:16:03',
    ),
    101 => 
    array (
        'id' => 103,
        'forename' => 'Sehrish',
        'surname' => 'Ahmad',
        'company' => '',
        'email' => 'Shelly203@hotmail.com',
        'tel' => '07548254561',
        'message' => 'In relation to your advertisement I would like to volunteer and the reference is 354CFM',
        'type' => 6,
        'ref' => '354CFM',
        'status' => 0,
        'date_recv' => '2017-03-14 21:18:09',
    ),
    102 => 
    array (
        'id' => 104,
        'forename' => 'Lorraine',
        'surname' => 'Morris',
        'company' => '',
        'email' => 'lorrainemorris12@gmail.com',
        'tel' => '02086537515',
        'message' => 'ENQUIRY 
Can you please tell me where this club is located and what help they need?
Thank you.
Regards,
Lorraine Morris ',
        'type' => 6,
        'ref' => '129CFM',
        'status' => 0,
        'date_recv' => '2017-03-20 09:45:20',
    ),
    103 => 
    array (
        'id' => 105,
        'forename' => 'Anthony p',
        'surname' => 'Lavelle',
        'company' => '',
        'email' => 'antplavelle@gmail.com',
        'tel' => '07539274825',
        'message' => 'I would like to voulunteer for the recently advertised position. I am a front end web designer / developer with great design skills, css coding, cut and paste javascript and php skills. I am a good communicator and team player. I look forward to hearing from. Kind regards

Ant 

Anthony p Lavellle
07539 274 825
antplavelle@gmail.com
@antworks
@antlavelle

Have a nice day Ant :o) x',
        'type' => 6,
        'ref' => '394CFM',
        'status' => 0,
        'date_recv' => '2017-05-07 23:51:38',
    ),
    104 => 
    array (
        'id' => 106,
        'forename' => 'Anthony p',
        'surname' => 'Lavelle',
        'company' => '',
        'email' => 'antplavelle@gmail.com',
        'tel' => '07539274825',
        'message' => 'Hi... I am applying for the recently advertised position. I would to get stuck in and help... i have good cummunication skills and a enthusiatic team player.

I look forward to hearing from you.

Kind regards

Ant

Anthony p Lavelle
07539274825
antplavelle@gmail.com
www.antworks.co.uk/portfolio
@antworks
@antlavelle

',
        'type' => 6,
        'ref' => '397CFM',
        'status' => 0,
        'date_recv' => '2017-05-07 23:56:11',
    ),
    105 => 
    array (
        'id' => 107,
        'forename' => 'Anthony p',
        'surname' => 'lavelle',
        'company' => '',
        'email' => 'antplavelle@gmail.com',
        'tel' => '07539274825',
        'message' => 'hi... i amapplying for this recently advertised position. I would like to stuck in and help out. I have administrative capabilities, a hard worker, good team player and enthusiastic person.

I look forward to hearing from you

Kind regards

Ant

Anthony p Lavelle
07539274825
antplavelle@gmal.com
www.antworks.co.uk/portfolio
@antworks
@antlavelle

Have a nice day ant :o) x',
        'type' => 6,
        'ref' => '391CFM',
        'status' => 0,
        'date_recv' => '2017-05-08 00:02:57',
    ),
    106 => 
    array (
        'id' => 108,
        'forename' => 'Anthony p',
        'surname' => 'lavelle',
        'company' => '',
        'email' => 'antplavelle@gmail.com',
        'tel' => '07539274825',
        'message' => 'Hi...

I am applying for the recently advertised position. I would like to get stuck in and help out. I am a good team player, enthusiastic and hard working.

I look forward to hearing from you.

Kind regards

Ant

Anthony P Lavelle
07539 274 825
antplavelle@gmail.com
www.antworks.co.uk/portfolio
@antworks
@antlavelle

Have a nice day :o) x ant',
        'type' => 6,
        'ref' => '382CFM',
        'status' => 0,
        'date_recv' => '2017-05-08 00:07:55',
    ),
    107 => 
    array (
        'id' => 109,
        'forename' => 'Anthony p',
        'surname' => 'lavelle',
        'company' => '',
        'email' => 'antplavelle@gmail.com',
        'tel' => '07539274825',
        'message' => 'Hi

I am applying the recently advertised position. I have administration skills, a good team player, hard working and enthusiastic person. Looking to get stuck and help out.

I look forward to hearing from you

Kind regards

Ant 

Anthony p Lavelle
07539 274 825
antplavelle@gmail.com
www.anworks.co.uk/portfolio
@antworks
@antlavelle

Have a nice day :o) ant x',
        'type' => 6,
        'ref' => '383CFM',
        'status' => 0,
        'date_recv' => '2017-05-08 00:11:19',
    ),
    108 => 
    array (
        'id' => 110,
        'forename' => 'Anthony p',
        'surname' => 'lavelle',
        'company' => '',
        'email' => 'antplavelle@gmail.com',
        'tel' => '07539274825',
        'message' => 'Hi

I am applying for the recently advertised position. I have restuarant experince of over 7 years. I am a good team player, hard working and enthusiastic person. Love to get stuck in and help out.

I look forward to hearing from you.

Kind regards

Ant

Anthony P Lavelle
07539 274 825
www.antworks.co.uk/portfolio
antplavelle@gmail.conm
@antworks
@antlavelle

have a nice day :o) ant x',
        'type' => 6,
        'ref' => '373CFM',
        'status' => 0,
        'date_recv' => '2017-05-08 00:15:52',
    ),
    109 => 
    array (
        'id' => 111,
        'forename' => 'Anthony p',
        'surname' => 'lavelle',
        'company' => '',
        'email' => 'antplavelle@gmail.com',
        'tel' => '07539274825',
        'message' => 'Hi

I am applying the recently advertised position. I would love to get stuck in and help out. I ama hard working and enthuiastic person. I am a good listener and have a caring nature.

I look froward to hearing from you

Kind regards

Ant

Anthony P Lavelle
07539 274 825
antplavelle@gmail.com
www.antworks.co.uk/portfolio
@antworks
@antlavelle

Have a nice day :o) Ant x',
        'type' => 6,
        'ref' => '369CFM',
        'status' => 0,
        'date_recv' => '2017-05-08 00:20:19',
    ),
    110 => 
    array (
        'id' => 112,
        'forename' => 'Anthony p',
        'surname' => 'lavelle',
        'company' => '',
        'email' => 'antplavelle@gmail.com',
        'tel' => '07539274825',
        'message' => 'Hi 

I am applying for the recently advertised position. Love to get stuck in and help out. I am hard working, a good team player and enthusiastic person. I am a good listener and have a caring nature.

I look forward to hearing from you

Kind regards

Ant

Anthony p Lavelle
07539 274 825
antplavelle@gmail.com
www.antworks.co.uk/portfolio
@antworks
@antlavelle

Have a nice day :o) ant x',
        'type' => 6,
        'ref' => '157CFM',
        'status' => 0,
        'date_recv' => '2017-05-08 00:24:56',
    ),
    111 => 
    array (
        'id' => 113,
        'forename' => 'Donna',
        'surname' => 'Barham',
        'company' => 'Kambala Residents Association',
        'email' => 'chair@kambala.org.uk',
        'tel' => '07507284291',
        'message' => 'I would be very interested in meeting this person, regarding our volunteering post',
        'type' => 5,
        'ref' => 'CFM248',
        'status' => 0,
        'date_recv' => '2017-05-24 13:28:22',
    ),
    112 => 
    array (
        'id' => 114,
        'forename' => 'Donna',
        'surname' => 'Barham',
        'company' => 'Kambala Residents Association',
        'email' => 'chair@kambala.org.uk',
        'tel' => '07507284291',
        'message' => 'I would like to meet with this Volunteer.',
        'type' => 5,
        'ref' => 'CFM278',
        'status' => 0,
        'date_recv' => '2017-05-24 13:30:55',
    ),
    113 => 
    array (
        'id' => 115,
        'forename' => 'Donna',
        'surname' => 'Barham',
        'company' => 'Kambala Residents Association',
        'email' => 'chair@kambala.org.uk',
        'tel' => '07507284291',
        'message' => 'I would like to get in contact with this volunteer',
        'type' => 5,
        'ref' => 'CFM364',
        'status' => 0,
        'date_recv' => '2017-05-25 08:11:54',
    ),
    114 => 
    array (
        'id' => 116,
        'forename' => 'Sehrish',
        'surname' => 'Ahmad',
        'company' => '',
        'email' => 'sehrishahmad@hotmail.co.uk',
        'tel' => '07548254561',
        'message' => 'I am looking to apply for a volunteering position this summer to build and enhance my CV. ',
        'type' => 6,
        'ref' => '372CFM',
        'status' => 0,
        'date_recv' => '2017-06-27 20:08:22',
    ),
    115 => 
    array (
        'id' => 117,
        'forename' => 'Sehrish',
        'surname' => 'Ahmad',
        'company' => '',
        'email' => 'sehrishahmad@hotmail.co.uk',
        'tel' => '07548254561',
        'message' => 'I am looking to apply for a volunteering work experience to build and enhance my CV. ',
        'type' => 6,
        'ref' => '151CFM',
        'status' => 0,
        'date_recv' => '2017-06-27 20:10:39',
    ),
    116 => 
    array (
        'id' => 118,
        'forename' => 'Sehrish',
        'surname' => 'Ahmad',
        'company' => '',
        'email' => 'sehrishahmad@hotmail.co.uk',
        'tel' => '07548254561',
        'message' => 'I am looking to apply for a volunteering work experience this summer to build and enhance my CV skills.',
        'type' => 6,
        'ref' => '354CFM',
        'status' => 0,
        'date_recv' => '2017-06-27 20:12:26',
    ),
    117 => 
    array (
        'id' => 119,
        'forename' => 'Ant',
        'surname' => 'Lavelle',
        'company' => '',
        'email' => 'Antplavelle@gmail.com',
        'tel' => '07539274825',
        'message' => 'Hi

Love to get stuck in and help good team player and hardworking.

Kind regards

Ant

Anthony Lavelle',
        'type' => 6,
        'ref' => '397CFM',
        'status' => 0,
        'date_recv' => '2017-07-26 01:50:56',
    ),
    118 => 
    array (
        'id' => 120,
        'forename' => 'Ant',
        'surname' => 'Lavelle',
        'company' => '',
        'email' => 'Antplavelle@icloud.com',
        'tel' => '07539274825',
        'message' => 'Hi

Love to get stuck in. Hardworking and good team player.

Kind regards

Ant

Anthony Lavelle ',
        'type' => 6,
        'ref' => '387CFM',
        'status' => 0,
        'date_recv' => '2017-07-26 01:53:14',
    ),
    119 => 
    array (
        'id' => 121,
        'forename' => 'Ant',
        'surname' => 'Lavelle',
        'company' => '',
        'email' => 'Antplavelle@icloud.com',
        'tel' => '07539274825',
        'message' => 'Hi

Love to get stuck and help. Hardworking and team player.

Kind regards

Ant

Anthony Lavelle ',
        'type' => 6,
        'ref' => '382CFM',
        'status' => 0,
        'date_recv' => '2017-07-26 01:56:10',
    ),
    120 => 
    array (
        'id' => 122,
        'forename' => 'Anthony p',
        'surname' => 'Lavelle',
        'company' => '',
        'email' => 'Antplavelle@icloud.com',
        'tel' => '07539274825',
        'message' => 'Hi

Love to get stuck and help. Hardworking and team player.

Kind regards

Ant

Anthony Lavelle',
        'type' => 6,
        'ref' => '373CFM',
        'status' => 0,
        'date_recv' => '2017-07-26 01:58:55',
    ),
    121 => 
    array (
        'id' => 123,
        'forename' => 'Anthony',
        'surname' => 'Lavelle',
        'company' => '',
        'email' => 'Antplavelle@icloud.com',
        'tel' => '07539274825',
        'message' => 'Hi

Love to get stuck and help. Hardworking and team player.

Kind regards 

Ant 

Anthony Lavelle',
        'type' => 6,
        'ref' => '355CFM',
        'status' => 0,
        'date_recv' => '2017-07-26 02:01:29',
    ),
    122 => 
    array (
        'id' => 124,
        'forename' => 'Anthony',
        'surname' => 'Lavelle',
        'company' => '',
        'email' => 'Antplavelle@icloud.com',
        'tel' => '07539274825',
        'message' => 'Hi

Love to get stuck in. Hardworking and team player.

Kind regards 

Ant

Anthony Lavelle',
        'type' => 6,
        'ref' => '322CFM',
        'status' => 0,
        'date_recv' => '2017-07-26 02:04:15',
    ),
    123 => 
    array (
        'id' => 125,
        'forename' => 'Barbara',
        'surname' => 'Aubert',
        'company' => '',
        'email' => 'barbara41133@outlook.com',
        'tel' => '07522511000',
        'message' => 'Hello,

I am interested in your advert for a volunteer administrator role. Please could you send me an application pack ?

Best Regards,',
        'type' => 6,
        'ref' => '259CFM',
        'status' => 0,
        'date_recv' => '2017-10-03 19:22:31',
    ),
    124 => 
    array (
        'id' => 126,
        'forename' => 'Loleta',
        'surname' => 'Griffith',
        'company' => '',
        'email' => 'loleta_griffith@hotmail.com',
        'tel' => '07445 996331',
        'message' => 'I am a trainee counsellor studying towards the level 4 diploma in therapeutic counselling and looking for a placement.  As I work full time, office hours, I am only able to commit to evenings or weekends.',
        'type' => 6,
        'ref' => '265CFM',
        'status' => 0,
        'date_recv' => '2017-10-04 13:00:52',
    ),
    125 => 
    array (
        'id' => 127,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements ',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello,
I came across your profile and am interested in you as a volunteer due to your qualifications. Would you please contact me on my telephone number.

Many Thanks,
Sahib',
        'type' => 5,
        'ref' => 'CFM335',
        'status' => 0,
        'date_recv' => '2017-10-15 20:07:48',
    ),
    126 => 
    array (
        'id' => 128,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello,

We are a charitable organization looking for your help regarding international fundraising to build a medication and cultural institutes. Therefore we would like your humanitarian assistance. There may be times when you may need to travel abroad.

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM426',
        'status' => 0,
        'date_recv' => '2017-10-15 20:14:08',
    ),
    127 => 
    array (
        'id' => 129,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello,

I messaged before, but I forgot to mention that there may be some travel involved if you like. 

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM335',
        'status' => 0,
        'date_recv' => '2017-10-15 20:16:21',
    ),
    128 => 
    array (
        'id' => 130,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello,

We are a charitable organization looking for your help regarding international fundraising to build a medication and cultural institutes. Therefore we would like your humanitarian assistance. There may also be some traveling abroad involved (it is optional).

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM415',
        'status' => 0,
        'date_recv' => '2017-10-15 20:19:28',
    ),
    129 => 
    array (
        'id' => 131,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello,

We are a charitable organization looking for your help regarding international fundraising to build a medication and cultural institutes. Therefore we would like your humanitarian assistance. There may also be some traveling abroad involved (it is optional).

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM409',
        'status' => 0,
        'date_recv' => '2017-10-15 20:21:08',
    ),
    130 => 
    array (
        'id' => 132,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello,

We are a charitable organization looking for your help regarding international fundraising to build a medication and cultural institutes. Therefore we would like your humanitarian assistance. There may also be some traveling abroad involved (it is optional).

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM390',
        'status' => 0,
        'date_recv' => '2017-10-15 20:22:34',
    ),
    131 => 
    array (
        'id' => 133,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello,

We are a charitable organization looking for your help regarding international fundraising to build a medication and cultural institutes. Therefore we would like your humanitarian assistance. There may also be some traveling abroad involved (it is optional).

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM382',
        'status' => 0,
        'date_recv' => '2017-10-15 20:23:13',
    ),
    132 => 
    array (
        'id' => 134,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello,

We are a charitable organization looking for your help regarding international fundraising to build a medication and cultural institutes. Therefore we would like your humanitarian assistance. There may also be some traveling abroad involved (it is optional).

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM364',
        'status' => 0,
        'date_recv' => '2017-10-15 20:25:06',
    ),
    133 => 
    array (
        'id' => 135,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello,

We are a charitable organization looking for your help regarding international fundraising to build a medication and cultural institutes. Therefore we would like your humanitarian assistance. There may also be some traveling abroad involved (it is optional).

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM334',
        'status' => 0,
        'date_recv' => '2017-10-15 20:29:12',
    ),
    134 => 
    array (
        'id' => 136,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello,

We are a charitable organization looking for your help regarding international fundraising to build a medication and cultural institutes. Therefore we would like your humanitarian assistance. There may also be some traveling abroad involved (it is optional).

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM325',
        'status' => 0,
        'date_recv' => '2017-10-15 20:31:52',
    ),
    135 => 
    array (
        'id' => 137,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello

We are a charitable organization that look to build medical and cultural institutes. This is mostly abroad. Therefore there may be an opportunity to travel (optional).

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM286',
        'status' => 0,
        'date_recv' => '2017-10-15 20:41:13',
    ),
    136 => 
    array (
        'id' => 138,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello

We are a charitable organization that look to build medical and cultural institutes. This is mostly abroad. Therefore there may be an opportunity to travel (optional).

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM277',
        'status' => 0,
        'date_recv' => '2017-10-15 20:42:45',
    ),
    137 => 
    array (
        'id' => 139,
        'forename' => 'Hadi',
        'surname' => 'Sahib',
        'company' => 'Keep Up Further Achievements',
        'email' => 'hadisahib@gmail.com',
        'tel' => '07902420500',
        'message' => 'Hello

We are a charitable organization that look to build medical and cultural institutes. This is mostly abroad. Therefore there may be an opportunity to travel (optional).

Many Thanks,
Hadi',
        'type' => 5,
        'ref' => 'CFM260',
        'status' => 0,
        'date_recv' => '2017-10-15 20:43:49',
    ),
    138 => 
    array (
        'id' => 140,
        'forename' => 'Paul',
        'surname' => 'Gregory',
        'company' => '',
        'email' => 'paul.located@gmail.com',
        'tel' => '07840151950',
        'message' => 'Interested in opportunity
',
        'type' => 6,
        'ref' => '119CFM',
        'status' => 0,
        'date_recv' => '2017-10-19 15:34:38',
    ),
    139 => 
    array (
        'id' => 141,
        'forename' => 'Claudia ',
        'surname' => 'Rostek',
        'company' => '',
        'email' => 'crostek@hotmail.com',
        'tel' => '07885656284',
        'message' => 'I would love to get involved with this organisation! ',
        'type' => 6,
        'ref' => '343CFM',
        'status' => 0,
        'date_recv' => '2017-11-27 14:18:01',
    ),
    140 => 
    array (
        'id' => 142,
        'forename' => 'Claudia',
        'surname' => 'Rostek',
        'company' => '',
        'email' => 'crostek@hotmail.com',
        'tel' => '07885656284',
        'message' => 'I would love to get involved',
        'type' => 6,
        'ref' => '422CFM',
        'status' => 0,
        'date_recv' => '2017-11-27 14:22:51',
    ),
    141 => 
    array (
        'id' => 143,
        'forename' => 'Tanisha',
        'surname' => 'Baptiste',
        'company' => '',
        'email' => 'tb244@outlook.com',
        'tel' => '07864687555',
        'message' => 'Hello i am Intrested in the position I have the relevant skills, I am reliable flexible, good time keeping if successful I can stay ASAP ',
        'type' => 6,
        'ref' => '421CFM',
        'status' => 0,
        'date_recv' => '2017-12-06 12:15:47',
    ),
    142 => 
    array (
        'id' => 144,
        'forename' => 'Tanisha',
        'surname' => 'Baptiste ',
        'company' => '',
        'email' => 'tb244@outlook.com',
        'tel' => '07864687555',
        'message' => 'Hello I am Intrested in this position I feel I have the relevant ',
        'type' => 6,
        'ref' => '404CFM',
        'status' => 0,
        'date_recv' => '2017-12-06 13:42:46',
    ),
    143 => 
    array (
        'id' => 145,
        'forename' => 'Elita',
        'surname' => 'Amantova',
        'company' => '',
        'email' => 'Elitaamantova1@outlook.com',
        'tel' => '02088791054',
        'message' => 'Hi, I am extremely interested in this position and have many years administration experience and enjoy helping others. I am available immediately and look forward to hearing back from you.
Best wishes, 
Elita Amantova',
        'type' => 6,
        'ref' => '195CFM',
        'status' => 0,
        'date_recv' => '2017-12-07 14:01:58',
    ),
    144 => 
    array (
        'id' => 146,
        'forename' => 'NIa',
        'surname' => 'Bellot',
        'company' => 'Home-Start Wandsworth',
        'email' => 'nia@homestartwandsworth.org.uk',
        'tel' => '0207 924 526',
        'message' => 'HSW is looking for a Data Cleaning Assistant. The role is at the early stages of development, but would include;
-data cleaning from the existing data management system
-exporting that data to a spreadsheet
-inputting cleaned data onto new data management system
-double entry of new data onto MESH & CLOG (for a specified time period)
-inputting new fields and information as the system is developed

Skills
Knowledge and interest in IT, data cleaning, spreadsheet development and case management systems good organisation skills and attention to detail
High written English skills
Understanding of maintaining confidentiality, Data Protection and handling sensitive information  

Availability: a minimum of 2-4hrs a week for 2-6months
',
        'type' => 5,
        'ref' => 'CFM439',
        'status' => 0,
        'date_recv' => '2017-12-13 13:54:00',
    ),
    145 => 
    array (
        'id' => 147,
        'forename' => 'Elita ',
        'surname' => 'Amantova',
        'company' => '',
        'email' => 'elitaamantova1@outlook.com',
        'tel' => '0208 879 105',
        'message' => 'Highly motivated individual with extensive customer service, cashier, cleaning, secretarial and factory experience.  With a polite and friendly manner, team working skills and the ability to follow health and safety practices, work well under pressure and have good numeracy skills to handle cash and stock. Available immediately',
        'type' => 6,
        'ref' => '421CFM',
        'status' => 0,
        'date_recv' => '2017-12-15 14:39:43',
    ),
    146 => 
    array (
        'id' => 148,
        'forename' => 'Marcus',
        'surname' => 'Mccleod',
        'company' => '',
        'email' => 'Melissa.Oshinowo@swlstg.nhs.uk',
        'tel' => '07967 830 42',
        'message' => 'Hi, I am interested in finding out about your gardening voluntary job as I have experience doing this and would like to apply for this position. Thanks',
        'type' => 6,
        'ref' => '245CFM',
        'status' => 0,
        'date_recv' => '2017-12-21 16:35:44',
    ),
    147 => 
    array (
        'id' => 149,
        'forename' => 'hadi',
        'surname' => 'sahib',
        'company' => 'kuffa foundation',
        'email' => 'turabaliraq@gmail.com',
        'tel' => '07949652400',
        'message' => 'Dear Sir/Madam, 

We, the Kuffa Foundation, are interested in contacting this volunteer due to their particular skill set in fundraising. 

Kuffa Foundation is an organisation which provides medication, education and cultural support to widows, orphans and people in need.

We would greatly appreciate this volunteers skill set to help raise money to continue our work. Our main way of raising funds is to correspond with people and ask for donations. 

We would be extremely delighted if the volunteer is interested and we ask that they kindly contact us using the contact addresses given if they would like more information. If the volunteer knows of anyone who would be interested in helping, we ask that they kindly pass on our contact information.

Yours sincerely, 
Kuffa Foundation ',
        'type' => 5,
        'ref' => 'CFM426',
        'status' => 0,
        'date_recv' => '2017-12-30 17:43:21',
    ),
    148 => 
    array (
        'id' => 150,
        'forename' => 'Kuffa ',
        'surname' => 'Foundation ',
        'company' => 'Kuffa Foundation ',
        'email' => 'turabaliraq@gmail.com',
        'tel' => '07949652400',
        'message' => '
Dear Sir/Madam, 

We, the Kuffa Foundation, are interested in contacting this volunteer due to their particular skill set in fundraising. 

Kuffa Foundation is an organisation which provides medication, education and cultural support to widows, orphans and people in need.

We would greatly appreciate this volunteers skill set to help raise money to continue our work. Our main way of raising funds is to correspond with people and ask for donations. 

We would be extremely delighted if the volunteer is interested and we ask that they kindly contact us using the contact addresses given if they would like more information. If the volunteer knows of anyone who would be interested in helping, we ask that they kindly pass on our contact information.

Happy holidays and a happy new year!

Yours sincerely, 
Kuffa Foundation 
',
        'type' => 5,
        'ref' => 'CFM426',
        'status' => 0,
        'date_recv' => '2017-12-30 17:47:15',
    ),
    149 => 
    array (
        'id' => 151,
        'forename' => 'hadi',
        'surname' => 'sahib',
        'company' => 'kuffa foundation',
        'email' => 'turabaliraq@gmail.com',
        'tel' => '07949652400',
        'message' => 'Dear Sir/Madam, 

We, the Kuffa Foundation, are interested in contacting this volunteer due to their particular skill set in fundraising. 

Kuffa Foundation is an organisation which provides medication, education and cultural support to widows, orphans and people in need.

We would greatly appreciate this volunteers skill set to help raise money to continue our work. Our main way of raising funds is to correspond with people and ask for donations. 

We would be extremely delighted if the volunteer is interested and we ask that they kindly contact us using the contact addresses given if they would like more information. If the volunteer knows of anyone who would be interested in helping, we ask that they kindly pass on our contact information.

Yours sincerely, 
Kuffa Foundation ',
        'type' => 5,
        'ref' => 'CFM426',
        'status' => 0,
        'date_recv' => '2017-12-30 17:48:46',
    ),
    150 => 
    array (
        'id' => 152,
        'forename' => 'Kuffa',
        'surname' => 'Foundation',
        'company' => 'Kuffa Foundation',
        'email' => 'turabaliraq@gmail.com',
        'tel' => '07949652400',
        'message' => '
Dear Sir/Madam, 

We, the Kuffa Foundation, are interested in contacting this volunteer due to their particular skill set in fundraising. 

Kuffa Foundation is an organisation which provides medication, education and cultural support to widows, orphans and people in need.

We would greatly appreciate this volunteers skill set to help raise money to continue our work. Our main way of raising funds is to correspond with people and ask for donations. 

We would be extremely delighted if the volunteer is interested and we ask that they kindly contact us using the contact addresses given if they would like more information. If the volunteer knows of anyone who would be interested in helping, we ask that they kindly pass on our contact information.

Yours sincerely, 
Kuffa Foundation 
',
        'type' => 5,
        'ref' => 'CFM426',
        'status' => 0,
        'date_recv' => '2017-12-30 18:18:03',
    ),
    151 => 
    array (
        'id' => 153,
        'forename' => 'KUFFA ',
        'surname' => 'FOUNDATION',
        'company' => 'KUFFA FOUNDATION ',
        'email' => 'turabaliraq@gmail.com',
        'tel' => '07949652400',
        'message' => '
Dear Sir/Madam, 

We, the Kuffa Foundation, are interested in contacting this volunteer due to their particular skill set in fundraising. 

Kuffa Foundation is an organisation which provides medication, education and cultural support to widows, orphans and people in need.

We would greatly appreciate this volunteers skill set to help raise money to continue our work. Our main way of raising funds is to correspond with people and ask for donations. 

We would be extremely delighted if the volunteer is interested and we ask that they kindly contact us using the contact addresses given if they would like more information. If the volunteer knows of anyone who would be interested in helping, we ask that they kindly pass on our contact information.

Yours sincerely, 
Kuffa Foundation 
',
        'type' => 5,
        'ref' => 'CFM426',
        'status' => 0,
        'date_recv' => '2017-12-30 18:20:06',
    ),
    152 => 
    array (
        'id' => 154,
        'forename' => 'Antara ',
        'surname' => 'Mirza',
        'company' => '',
        'email' => 'antara-mirza@hotmail.com',
        'tel' => '07969548785',
        'message' => 'Hi there, my name is Antara Mirza, I would be interested in volunteering. I have a lot of experience working in special educational needs with both children and adults. ',
        'type' => 6,
        'ref' => '325CFM',
        'status' => 0,
        'date_recv' => '2018-01-16 15:24:31',
    ),
    153 => 
    array (
        'id' => 155,
        'forename' => 'Antara ',
        'surname' => 'Mirza',
        'company' => '',
        'email' => 'antara-mirza@hotmail.com',
        'tel' => '07969548785',
        'message' => 'Hi there, my name is Antara Mirza, I would be interested in volunteering. I have a lot of experience working in special educational needs with both children and adults. ',
        'type' => 6,
        'ref' => '325CFM',
        'status' => 0,
        'date_recv' => '2018-01-16 15:28:43',
    ),
    154 => 
    array (
        'id' => 156,
        'forename' => 'Alison',
        'surname' => 'Johnson',
        'company' => 'Torchlight Mnistries ',
        'email' => 'info@torchlightministries.com',
        'tel' => '0208 945 555',
    'message' => 'We have a voluntary position for a finance assistant. Ideally seeking someone with an accountancy/financial or banking background (or experience). Some book keeping duties and helping to set up electronic ledger system. ',
        'type' => 5,
        'ref' => 'CFM433',
        'status' => 0,
        'date_recv' => '2018-02-10 19:32:32',
    ),
    155 => 
    array (
        'id' => 157,
        'forename' => 'Alison',
        'surname' => 'Johnson',
        'company' => 'Torchlight Mnistries ',
        'email' => 'info@torchlightministries.com',
        'tel' => '02089455559',
        'message' => 'We have volunteer opportunities for an admin person and someone with your stated skill sets, If you are still available I would appreciate it if you could get in touch',
        'type' => 5,
        'ref' => 'CFM420',
        'status' => 0,
        'date_recv' => '2018-02-10 20:31:01',
    ),
    156 => 
    array (
        'id' => 158,
        'forename' => 'Niamh',
        'surname' => 'Davis',
        'company' => 'Lifetimes',
        'email' => 'assistant@life-times.org.uk',
        'tel' => '02088752849',
        'message' => 'Hi there, 
 
Hear at Lifetimes we currently have 2 volunteering opportunities. 1 as a database administrator, which would assist us in running Care4me and the other is a volunteer admin role that would help us with our various projects, such as our homeless projects. This would include making up care packages for homeless women and men. Would any of these interest you? 

Kind regards, Lifetimes ',
        'type' => 5,
        'ref' => 'CFM444',
        'status' => 0,
        'date_recv' => '2018-02-14 09:40:38',
    ),
    157 => 
    array (
        'id' => 159,
        'forename' => 'Niamh',
        'surname' => 'Davis',
        'company' => 'Lifetimes',
        'email' => 'assistant@life-times.org.uk',
        'tel' => '02088752849',
        'message' => 'Hi there, 

Here at Lifetimes we are looking for a database administrator who is computer literate and able to assist us in the running of our community directory, Care4me. Is this something you may be interested in?

Lifetimes',
        'type' => 5,
        'ref' => 'CFM439',
        'status' => 0,
        'date_recv' => '2018-02-14 09:51:54',
    ),
    158 => 
    array (
        'id' => 160,
        'forename' => 'Beth',
        'surname' => 'Northey',
        'company' => '',
        'email' => 'beth.northey@gmail.com',
        'tel' => '07974743442',
        'message' => 'Hi there. 
I would be interested in helping someone with their weekly shops. 
I work four days a week but have a car and a clean driving license. 
I live in Roehampton. 
Look forward to hearing from you. 
Thanks
Beth. ',
        'type' => 6,
        'ref' => '418CFM',
        'status' => 0,
        'date_recv' => '2018-02-23 13:51:38',
    ),
    159 => 
    array (
        'id' => 161,
        'forename' => 'Beth',
        'surname' => 'Northey',
        'company' => '',
        'email' => 'beth.northey@gmail.com',
        'tel' => '07974743442',
        'message' => 'Hi there. 
I would be interested in helping someone with their weekly shops. 
I work four days a week but have a car and a clean driving license. 
I live in Roehampton. 
Look forward to hearing from you. 
Thanks
Beth. ',
        'type' => 6,
        'ref' => '418CFM',
        'status' => 0,
        'date_recv' => '2018-02-23 13:54:48',
    ),
    160 => 
    array (
        'id' => 162,
        'forename' => 'Beth',
        'surname' => 'Northey',
        'company' => '',
        'email' => 'beth.northey@gmail.com',
        'tel' => '07974743442',
        'message' => 'Hi there. 
I would be interested in helping someone with their weekly shops. 
I work four days a week but have a car and a clean driving license. 
I live in Roehampton. 
Look forward to hearing from you. 
Thanks
Beth. ',
        'type' => 6,
        'ref' => '418CFM',
        'status' => 0,
        'date_recv' => '2018-02-23 13:57:54',
    ),
    161 => 
    array (
        'id' => 163,
        'forename' => '',
        'surname' => '',
        'company' => '',
        'email' => '',
        'tel' => '',
        'message' => '',
        'type' => 0,
        'ref' => '',
        'status' => 0,
        'date_recv' => '2018-03-03 19:30:50',
    ),
    162 => 
    array (
        'id' => 164,
        'forename' => '',
        'surname' => '',
        'company' => '',
        'email' => '',
        'tel' => '',
        'message' => '',
        'type' => 0,
        'ref' => '',
        'status' => 0,
        'date_recv' => '2018-03-06 12:36:49',
    ),
    163 => 
    array (
        'id' => 165,
        'forename' => 'Paul ',
        'surname' => 'Gregory',
        'company' => '',
        'email' => 'paul.located@gmail.com',
        'tel' => '07480151950',
        'message' => 'Please inform me of further application process. Am interested in the post.

Thanks
Paul Gregory',
        'type' => 6,
        'ref' => '431CFM',
        'status' => 0,
        'date_recv' => '2018-03-12 18:27:52',
    ),
    164 => 
    array (
        'id' => 166,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208 772 615',
        'message' => 'Hi,

Certitude is a not for profit that provides personalised support for people with learning disabilities, autism and mental health needs.
We have a volunteer vacancy in our Balham head office for a receptionist to cover lunch time on Tuesday 12-1pm, Wednesdays 1-2pm and Fridays 12-1pm.

I would be very grateful if you could let me know if this is something you would be interested in doing.

Kind regards,

Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM447',
        'status' => 0,
        'date_recv' => '2018-04-09 11:18:48',
    ),
    165 => 
    array (
        'id' => 167,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208 772 615',
        'message' => 'Hi,

Certitude is a not for profit organisation providing personalised support for people with learning disabilities, autism and mental health support needs.
We have vacancies for people with gardening skills to work at some of our services.

if this is something that would be of interest to you please contact me.

Kind regards,

Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM445',
        'status' => 0,
        'date_recv' => '2018-04-09 11:23:38',
    ),
    166 => 
    array (
        'id' => 168,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208 772 615',
        'message' => 'Hi,

Certitude is a not for profit organisation that provides personalised support for people with learning disabilities, autism and mental health support needs.
we have a vacancy in our Balham head office for a receptionist to cover the reception on Tuesdays 12-1, Wednesdays 1-2 and Fridays 12-1.
If this is something you feel would be of interest to you please contact me.

Kind regards,

Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM443',
        'status' => 0,
        'date_recv' => '2018-04-09 11:26:49',
    ),
    167 => 
    array (
        'id' => 169,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208 772 615',
        'message' => 'Hi,

Certitude is a not for profit organisation that provides personalised support for people with learning disabilities, autism and mental health support needs.
We are looking for some tech savvy, creative individuals to help our service centre’s promote events and the work they do.
Gain some work experience working for an excellent charity and help our service centres spread the word out on what they do
if this sounds like something you would be interested in doing please contact me.

Kind regards,

Caroline Malanda
',
        'type' => 5,
        'ref' => 'CFM420',
        'status' => 0,
        'date_recv' => '2018-04-09 11:30:38',
    ),
    168 => 
    array (
        'id' => 170,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208 772 615',
        'message' => 'Hi,

Certitude is a not for profit organisation that provides personalised support to people with learning difficulties, autism and mental health support needs.
We have a volunteer vacancy at our Balham head office for a lunch time cover receptionist, working Tuesdays 12-1, Wednesdays 1-2 and Fridays 12-1.
If this is something you think you would be interested in please contact me.

Kind regards,

Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM415',
        'status' => 0,
        'date_recv' => '2018-04-09 11:47:53',
    ),
    169 => 
    array (
        'id' => 171,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208 772 615',
        'message' => 'Hi,

Certitude is a not for profit organisation that provides personalised support to people with learning disabilities, autism and mental health support needs.
Can you navigate social media? Or are you great with leaflets and flyers?
We are looking for some tech savvy, creative individuals to help our service centre’s promote events and the work they do.
Gain some work experience working for an excellent charity and help our service centres spread the word out on what they do.
If this is something you think you would be interested in please do not hesitate to contact me,

Kind regards,

Caroline Malanda
',
        'type' => 5,
        'ref' => 'CFM382',
        'status' => 0,
        'date_recv' => '2018-04-09 11:52:24',
    ),
    170 => 
    array (
        'id' => 172,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208772 6150',
        'message' => 'Hi,

Certitude is a not for profit organisation that provide personalised support to people with learning disabilities, autism and mental health support needs.
We have a volunteer vacancy in our Balham head office for reception lunch time cover working Tuesdays 12-1, Wednesdays 1-2 and Fridays 12-1.
If this is something that interests you please contact me.

Kind regards,
Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM313',
        'status' => 0,
        'date_recv' => '2018-04-09 12:01:35',
    ),
    171 => 
    array (
        'id' => 173,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '02087726150',
        'message' => 'Hi,

Certitude are a not for profit organisation that provides personalised support to people with learning disabilities, autism and mental health support needs.
We have a volunteer vacancy in our Balham head office for a lunch time cover receptionist working Tuesdays 12-1, Wednesdays 1-2 and Fridays 12-1.
If this is something you are interested in please contact me.

Kind regards,
Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM286',
        'status' => 0,
        'date_recv' => '2018-04-09 12:06:22',
    ),
    172 => 
    array (
        'id' => 174,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208772 6150',
        'message' => 'Hi,

Certitude is a not for profit organisation that provides personalised support for people with learning disabilities, autism and mental health support needs.
Are you the next Alan Titchmarsh?
We have volunteer opportunities for those that love doing a little gardening!
Come join our team of superstars and work alongside the people we support.
Certitude provides personalised support across London to people with learning disabilities, autism and mental health support needs as well as their families and carers.
Come and put your gardening skills to use and help the people we support create a garden to be proud of!
Contact us if you don’t mind lending us your green fingers.

Kind regards,
Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM283',
        'status' => 0,
        'date_recv' => '2018-04-09 12:13:41',
    ),
    173 => 
    array (
        'id' => 175,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208 772 615',
        'message' => 'Hi,

Certitude is a not for profit organisation that provides personalised support for people with learning disabilities, autism and mental health support needs.
We have a volunteer opportunity for someone willing to gain experience in the housing sector. You would be working in our head office doing tasks such as:
1.	Preparing welcome packs
2.	Preparing tenancy packs
3.	Chasing contractors for outstanding works/ appointments
4.	Overhaul of tenancy files
5.	Chasing services for SHIP returns
6.	Taking minutes at our housing department meetings
7.	Help with the overhaul of the tenancy files and the HB admin post we receive 

This role is available for 2 people and will be ongoing for 4 months on a 3 day a week basis. 
Our charity work to support such amazing people, we never forget that the star of the show isn’t always the one on the stage!
Make a difference behind the scenes and help us stay efficient and ensure the people we support are provided with the best possible care from all angles.
Due to the nature of our work, DBS checks will be required.
If this interests you please contact me.

Kind regards,
Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM278',
        'status' => 0,
        'date_recv' => '2018-04-09 12:16:43',
    ),
    174 => 
    array (
        'id' => 176,
        'forename' => 'Caroline ',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208772 6150',
        'message' => 'Hi,

Certitude is a not for profit organisation that provides personalised support to people with learning disabilities, autism and mental health support needs.
We have a volunteer opportunity for someone willing to gain experience in the housing sector. You would be working in our head office doing tasks such as:
1.	Preparing welcome packs
2.	Preparing tenancy packs
3.	Chasing contractors for outstanding works/ appointments
4.	Overhaul of tenancy files
5.	Chasing services for SHIP returns
6.	Taking minutes at our housing department meetings
7.	Help with the overhaul of the tenancy files and the HB admin post we receive 

This role is available for 2 people and will be ongoing for 4 months on a 3 day a week basis. 
Our charity work to support such amazing people, we never forget that the star of the show isn’t always the one on the stage!
Make a difference behind the scenes and help us stay efficient and ensure the people we support are provided with the best possible care from all angles.
Due to the nature of our work, DBS checks will be required.

If this is something you would be interested in please contact me.

Kind regards,

Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM260',
        'status' => 0,
        'date_recv' => '2018-04-09 12:19:08',
    ),
    175 => 
    array (
        'id' => 177,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208 772 615',
        'message' => 'Hi,

Certitude is a not for profit organisation that provides personalised support for people with learning disabilities, autism and mental health support needs.
We have a volunteer opportunity for someone willing to gain experience in the housing sector. You would be working in our head office doing tasks such as:
1.	Preparing welcome packs
2.	Preparing tenancy packs
3.	Chasing contractors for outstanding works/ appointments
4.	Overhaul of tenancy files
5.	Chasing services for SHIP returns
6.	Taking minutes at our housing department meetings
7.	Help with the overhaul of the tenancy files and the HB admin post we receive 

This role is available for 2 people and will be ongoing for 4 months on a 3 day a week basis. 
Our charity work to support such amazing people, we never forget that the star of the show isn’t always the one on the stage!
Make a difference behind the scenes and help us stay efficient and ensure the people we support are provided with the best possible care from all angles.
Due to the nature of our work, DBS checks will be required.

If this is something you would be interested in please contact me.

Kind regards,
Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM261',
        'status' => 0,
        'date_recv' => '2018-04-09 12:21:03',
    ),
    176 => 
    array (
        'id' => 178,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208 772 615',
        'message' => 'Hi,

Certitude is a not for profit organisation providing personalised support for people with learning disabilities, autism and mental health support needs.
Can you navigate social media? Or are you great with leaflets and flyers?
We are looking for some tech savvy, creative individuals to help our service centre’s promote events and the work they do.
Gain some work experience working for an excellent charity and help our service centres spread the word out on what they do.
If this sounds like something you would be interested in please contact me.

Kind regards,
Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM238',
        'status' => 0,
        'date_recv' => '2018-04-09 12:31:45',
    ),
    177 => 
    array (
        'id' => 179,
        'forename' => 'Caroline',
        'surname' => 'Malanda',
        'company' => 'Certitude',
        'email' => 'cmalanda@certitude.org.uk',
        'tel' => '0208 772 615',
        'message' => 'Hi ,
Certitude is a not for profit organisation providing personalised support for people with learning disabilities, autism and mental health support needs.
We have a volunteer vacancy in our Balham head office for lunch time reception cover, working Tuesdays 12-1pm, Wednesdays 1-2pm and Fridays 12-1pm.
If this is something you would be interested in please contact me.

Kind regards,
Caroline Malanda',
        'type' => 5,
        'ref' => 'CFM206',
        'status' => 0,
        'date_recv' => '2018-04-09 12:39:18',
    ),
    178 => 
    array (
        'id' => 180,
        'forename' => 'Rashidah',
        'surname' => 'Hussain',
        'company' => '',
        'email' => 'rashidahbkhussain@hotmail.com',
        'tel' => '07891006151',
        'message' => 'I would like to find out more about this position ',
        'type' => 6,
        'ref' => '331CFM',
        'status' => 0,
        'date_recv' => '2018-04-18 14:30:25',
    ),
    179 => 
    array (
        'id' => 181,
        'forename' => 'Hanna-Liisa',
        'surname' => 'Vilu',
        'company' => '',
        'email' => 'hannaliisavilu@gmail.com',
        'tel' => '07845578005',
        'message' => 'As a medical writer, I feel closely connected to public health and have become increasingly interested in using my set of skills in a practical way to help people more directly than I am currently able to. I have previously volunteered in a care role, which I found very interesting and gratifying, so I am now seeking an opportunity to gain more experience in a similar role to make a transition into a career as a healthcare professional.',
        'type' => 6,
        'ref' => '369CFM',
        'status' => 0,
        'date_recv' => '2018-04-30 13:22:55',
    ),
    180 => 
    array (
        'id' => 182,
        'forename' => 'Rod',
        'surname' => 'Balgarnie',
        'company' => 'Offgrid Webdesign',
        'email' => 'rod@offgridwebdesign.co.uk',
        'tel' => '07795311709',
        'message' => 'This is a test from rod',
        'type' => 5,
        'ref' => '2764',
        'status' => 0,
        'date_recv' => '2018-06-01 00:20:01',
    ),
    181 => 
    array (
        'id' => 183,
        'forename' => 'Rod',
        'surname' => 'Balgarnie',
        'company' => 'Offgrid Webdesign',
        'email' => 'rod@offgridwebdesign.co.uk',
        'tel' => '07795311709',
        'message' => 'Test agian',
        'type' => 5,
        'ref' => '2764',
        'status' => 0,
        'date_recv' => '2018-06-01 00:28:06',
    ),
    182 => 
    array (
        'id' => 184,
        'forename' => 'Rod',
        'surname' => 'Balgarnie',
        'company' => 'Offgrid Webdesign',
        'email' => 'rod@offgridwebdesign.co.uk',
        'tel' => '07795311709',
        'message' => 'Test 3',
        'type' => 5,
        'ref' => '2764',
        'status' => 0,
        'date_recv' => '2018-06-01 00:30:04',
    ),
    183 => 
    array (
        'id' => 185,
        'forename' => 'Rod',
        'surname' => 'Balgarnie',
        'company' => '',
        'email' => 'rod@offgridwebdesign.co.uk',
        'tel' => '07793117090',
        'message' => 'Rod - This is a test enquiry',
        'type' => 6,
        'ref' => '',
        'status' => 0,
        'date_recv' => '2018-06-04 23:21:14',
    ),
    184 => 
    array (
        'id' => 186,
        'forename' => 'Rod',
        'surname' => 'Balgarnie',
        'company' => '',
        'email' => 'rod@offgridwebdesign.co.uk',
        'tel' => '07795311709',
        'message' => 'Rod - Testing',
        'type' => 6,
        'ref' => '',
        'status' => 0,
        'date_recv' => '2018-06-04 23:25:36',
    ),
    185 => 
    array (
        'id' => 187,
        'forename' => 'Rod',
        'surname' => 'Balgarnie',
        'company' => '',
        'email' => 'rod@offgridwebdesign.co.uk',
        'tel' => '07795311709',
        'message' => 'Rod Testing',
        'type' => 6,
        'ref' => '193CFM',
        'status' => 0,
        'date_recv' => '2018-06-04 23:31:48',
    ),
    186 => 
    array (
        'id' => 188,
        'forename' => 'Sylivia',
        'surname' => 'Nalwanga',
        'company' => '',
        'email' => 'clasysym@gmail.com',
        'tel' => '07852928177',
        'message' => 'I am just inquiring if the social media officer role is still available.',
        'type' => 6,
        'ref' => '446CFM',
        'status' => 0,
        'date_recv' => '2018-06-06 11:04:20',
    ),
    187 => 
    array (
        'id' => 189,
        'forename' => 'Sylivia',
        'surname' => 'Nalwanga',
        'company' => '',
        'email' => 'clasysym@gmail.com',
        'tel' => '07852928177',
        'message' => 'Enquiry
I would like to know if the hospital discharge support role is still available and what hours does one have to work if  its still available.',
        'type' => 6,
        'ref' => '157CFM',
        'status' => 0,
        'date_recv' => '2018-06-06 11:15:53',
    ),
    188 => 
    array (
        'id' => 190,
        'forename' => 'Sylivia',
        'surname' => 'Nalwanga',
        'company' => '',
        'email' => 'clasysym@gmail.com',
        'tel' => '07852928177',
        'message' => 'Enquiry
I am enquiring if the volunteer/recruitment team position is still available.
If so what are the times for working?',
        'type' => 6,
        'ref' => '300CFM',
        'status' => 0,
        'date_recv' => '2018-06-06 11:27:12',
    ),
    189 => 
    array (
        'id' => 191,
        'forename' => 'niamh',
        'surname' => 'DAVIS',
        'company' => '',
        'email' => 'assistant@life-times.org.uk',
        'tel' => '02088752849',
        'message' => 'test',
        'type' => 6,
        'ref' => '447CFM',
        'status' => 0,
        'date_recv' => '2018-06-15 16:55:06',
    ),
    190 => 
    array (
        'id' => 192,
        'forename' => 'niamh',
        'surname' => 'DAVIS',
        'company' => '',
        'email' => 'assistant@life-times.org.uk',
        'tel' => '02088752849',
        'message' => 'test',
        'type' => 6,
        'ref' => '447CFM',
        'status' => 0,
        'date_recv' => '2018-06-15 16:55:11',
    ),
    191 => 
    array (
        'id' => 193,
        'forename' => 'niamh',
        'surname' => 'DAVIS',
        'company' => '',
        'email' => 'assistant@life-times.org.uk',
        'tel' => '02088752849',
        'message' => 'test',
        'type' => 6,
        'ref' => '447CFM',
        'status' => 0,
        'date_recv' => '2018-06-15 16:55:15',
    ),
    192 => 
    array (
        'id' => 194,
        'forename' => 'niamh',
        'surname' => 'DAVIS',
        'company' => '',
        'email' => 'assistant@life-times.org.uk',
        'tel' => '02088752849',
        'message' => 'test',
        'type' => 6,
        'ref' => '447CFM',
        'status' => 0,
        'date_recv' => '2018-06-15 16:55:19',
    ),
    193 => 
    array (
        'id' => 195,
        'forename' => 'Sneha',
        'surname' => 'Kumar',
        'company' => '',
        'email' => 'sneha.p.kumar@gmail.com',
        'tel' => '07405632031',
        'message' => 'Enquiry
I wanted to know more about this volunteering position like working hours and location',
        'type' => 6,
        'ref' => '300CFM',
        'status' => 0,
        'date_recv' => '2018-06-30 22:27:36',
    ),
    194 => 
    array (
        'id' => 196,
        'forename' => 'Sneha',
        'surname' => 'Kumar',
        'company' => '',
        'email' => 'sneha.p.kumar@gmail.com',
        'tel' => '07405632031',
        'message' => 'Enquiry
I wanted to know more about this volunteering position like working hours and location',
        'type' => 6,
        'ref' => '300CFM',
        'status' => 0,
        'date_recv' => '2018-06-30 22:27:51',
    ),
    195 => 
    array (
        'id' => 197,
        'forename' => 'Sneha',
        'surname' => 'Kumar',
        'company' => '',
        'email' => 'sneha.p.kumar@gmail.com',
        'tel' => '07405632031',
        'message' => 'Enquiry
I want to know more about this position like location and working hours',
        'type' => 6,
        'ref' => '431CFM',
        'status' => 0,
        'date_recv' => '2018-06-30 22:29:51',
    ),
    196 => 
    array (
        'id' => 198,
        'forename' => 'Sophia',
        'surname' => 'Bechev',
        'company' => '',
        'email' => 'sbechev@gmail.com',
        'tel' => '07521565541',
        'message' => 'Dear Sir/Madam, 

I am very interested in this opportunity, would it be possible to find out more? I am free to start as soon as possible. ',
        'type' => 6,
        'ref' => '446CFM',
        'status' => 0,
        'date_recv' => '2018-07-06 11:29:47',
    ),
    197 => 
    array (
        'id' => 199,
        'forename' => 'Sophia',
        'surname' => 'Bechev',
        'company' => '',
        'email' => 'sbechev@gmail.com',
        'tel' => '07521565541',
        'message' => 'Dear Sir/Madam, 

I am very interested in this volunteering opportunity. As I have just finished university, I am looking to volunteer and I feel your charity is a perfect fit for my skills and atributes. In my final year, I was President of the Women in Business Society and we dealt with lots of employability related services. Would I be able to find out more about this opportunity? I am available to start immediately if required. 

Thank you, 
Sophia  ',
        'type' => 6,
        'ref' => '442CFM',
        'status' => 0,
        'date_recv' => '2018-07-06 11:32:10',
    ),
    198 => 
    array (
        'id' => 200,
        'forename' => 'Sophia',
        'surname' => 'Bechev',
        'company' => '',
        'email' => 'sbechev@gmail.com',
        'tel' => '07521565541',
        'message' => 'Dear Sir/Madam, 

I am very interested in working for CAW, would it be possible to find out more information please? 

Thank you, 
Sophia ',
        'type' => 6,
        'ref' => '301CFM',
        'status' => 0,
        'date_recv' => '2018-07-06 11:33:18',
    ),
    199 => 
    array (
        'id' => 201,
        'forename' => 'Sophia',
        'surname' => 'Bechev',
        'company' => '',
        'email' => 'sbechev@gmail.com',
        'tel' => '07521565541',
        'message' => 'Dear Sir/Madam, 

I am very interested in working for CAW, would it be possible to find out more information please? 

Thank you, 
Sophia ',
        'type' => 6,
        'ref' => '301CFM',
        'status' => 0,
        'date_recv' => '2018-07-06 11:33:22',
    ),
    200 => 
    array (
        'id' => 202,
        'forename' => 'Rebecca',
        'surname' => 'Rogers',
        'company' => '',
        'email' => 'rebeccasianrogers@gmail.com',
        'tel' => '07564612001',
        'message' => 'Hi, I am interested in volunteering for your surplus food distribution and coordination role. I have huge issues with our food waste culture and am looking for a community project to become involved in. Looking forward to hearing from you!',
        'type' => 6,
        'ref' => '457CFM',
        'status' => 0,
        'date_recv' => '2018-07-13 11:12:39',
    ),
    201 => 
    array (
        'id' => 203,
        'forename' => 'Rebecca',
        'surname' => 'Rogers',
        'company' => '',
        'email' => 'rebeccasianrogers@gmail.com',
        'tel' => '07564612001',
        'message' => 'Hi, I am interested in your volunteer admin assistant role. I am a friendly, agreeable person, currently studying Psychology at the University of Bath. Through my studies, I have developed a high level of organization as well as a good work ethic. Therefore I am interested in and think I would be suited to this role. Looking forward to hearing from you!',
        'type' => 6,
        'ref' => '432CFM',
        'status' => 0,
        'date_recv' => '2018-07-13 11:18:31',
    ),
));
        
        
    }
}