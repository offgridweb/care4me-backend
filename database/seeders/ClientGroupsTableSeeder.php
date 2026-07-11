<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client_groups')->delete();
        
        \DB::table('client_groups')->insert(array (
            0 => 
            array (
                'client_group_id' => 1,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => '-',
                'client_group_desc' => '-',
                'client_group_image' => '',
                'client_group_count' => 0,
            ),
            1 => 
            array (
                'client_group_id' => 3,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'Disabled',
                'client_group_desc' => 'Disabled',
                'client_group_image' => 'group_images/disabled.jpg',
                'client_group_count' => 31,
            ),
            2 => 
            array (
                'client_group_id' => 5,
                'client_group_parent' => 3,
                'client_group_has_child' => 0,
                'client_group_name' => 'Learning disability',
                'client_group_desc' => 'Learning disability',
                'client_group_image' => 'group_images/LD.jpg',
                'client_group_count' => 17,
            ),
            3 => 
            array (
                'client_group_id' => 6,
                'client_group_parent' => 3,
                'client_group_has_child' => 0,
                'client_group_name' => 'Chronic illness',
                'client_group_desc' => 'Chronic illness',
                'client_group_image' => 'category_images/Chronic_Illness.jpg',
                'client_group_count' => 15,
            ),
            4 => 
            array (
                'client_group_id' => 7,
                'client_group_parent' => 3,
                'client_group_has_child' => 0,
                'client_group_name' => 'Physical disability',
                'client_group_desc' => 'Physcial disability',
                'client_group_image' => 'category_images/Physical_Disability.jpg',
                'client_group_count' => 18,
            ),
            5 => 
            array (
                'client_group_id' => 8,
                'client_group_parent' => 3,
                'client_group_has_child' => 0,
                'client_group_name' => 'Hearing impairment',
                'client_group_desc' => 'Hearing impairment',
                'client_group_image' => 'group_images/hearing.JPG',
                'client_group_count' => 13,
            ),
            6 => 
            array (
                'client_group_id' => 9,
                'client_group_parent' => 3,
                'client_group_has_child' => 0,
                'client_group_name' => 'Visual impairment',
                'client_group_desc' => 'Visual impairment',
                'client_group_image' => 'category_images/Visual_Impairment.jpg',
                'client_group_count' => 13,
            ),
            7 => 
            array (
                'client_group_id' => 10,
                'client_group_parent' => 3,
                'client_group_has_child' => 0,
                'client_group_name' => 'Mental health',
                'client_group_desc' => 'Mental health',
                'client_group_image' => 'group_images/mentalhealthorarts.jpg',
                'client_group_count' => 26,
            ),
            8 => 
            array (
                'client_group_id' => 11,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'Faith community',
                'client_group_desc' => 'Faith community',
                'client_group_image' => 'group_images/faith_community.jpg',
                'client_group_count' => 2,
            ),
            9 => 
            array (
                'client_group_id' => 12,
                'client_group_parent' => 11,
                'client_group_has_child' => 0,
                'client_group_name' => 'Buddhist',
                'client_group_desc' => 'Buddhist',
                'client_group_image' => 'group_images/buddhist.JPG',
                'client_group_count' => 1,
            ),
            10 => 
            array (
                'client_group_id' => 13,
                'client_group_parent' => 11,
                'client_group_has_child' => 0,
                'client_group_name' => 'Christian',
                'client_group_desc' => 'Christian',
                'client_group_image' => 'group_images/Christian.JPG',
                'client_group_count' => 2,
            ),
            11 => 
            array (
                'client_group_id' => 14,
                'client_group_parent' => 11,
                'client_group_has_child' => 0,
                'client_group_name' => 'Hindu',
                'client_group_desc' => 'Hindu',
                'client_group_image' => 'group_images/hindu.JPG',
                'client_group_count' => 1,
            ),
            12 => 
            array (
                'client_group_id' => 15,
                'client_group_parent' => 11,
                'client_group_has_child' => 0,
                'client_group_name' => 'Muslim',
                'client_group_desc' => 'Muslim',
                'client_group_image' => 'group_images/muslim.JPG',
                'client_group_count' => 2,
            ),
            13 => 
            array (
                'client_group_id' => 16,
                'client_group_parent' => 11,
                'client_group_has_child' => 0,
                'client_group_name' => 'Sikh',
                'client_group_desc' => 'Sikh',
                'client_group_image' => 'group_images/Sikh.JPG',
                'client_group_count' => 1,
            ),
            14 => 
            array (
                'client_group_id' => 19,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'Specific community',
                'client_group_desc' => 'Specific community',
                'client_group_image' => 'group_images/specific_community.jpg',
                'client_group_count' => 6,
            ),
            15 => 
            array (
                'client_group_id' => 21,
                'client_group_parent' => 19,
                'client_group_has_child' => 0,
                'client_group_name' => 'South Asian',
                'client_group_desc' => 'South Asian',
                'client_group_image' => 'category_images/South_Asian.jpg',
                'client_group_count' => 3,
            ),
            16 => 
            array (
                'client_group_id' => 22,
                'client_group_parent' => 19,
                'client_group_has_child' => 0,
                'client_group_name' => 'Afro-Caribbean',
                'client_group_desc' => 'African',
                'client_group_image' => 'A-C.JPG',
                'client_group_count' => 4,
            ),
            17 => 
            array (
                'client_group_id' => 23,
                'client_group_parent' => 19,
                'client_group_has_child' => 0,
                'client_group_name' => 'French speaking',
                'client_group_desc' => 'French speaking',
                'client_group_image' => 'French_Speaking.JPG',
                'client_group_count' => 3,
            ),
            18 => 
            array (
                'client_group_id' => 24,
                'client_group_parent' => 19,
                'client_group_has_child' => 0,
                'client_group_name' => 'Somali',
                'client_group_desc' => 'Somali',
                'client_group_image' => 'group_images/Somali.jpg',
                'client_group_count' => 4,
            ),
            19 => 
            array (
                'client_group_id' => 25,
                'client_group_parent' => 19,
                'client_group_has_child' => 0,
                'client_group_name' => 'Polish',
                'client_group_desc' => 'Polish',
                'client_group_image' => 'group_images/Polish.JPG',
                'client_group_count' => 3,
            ),
            20 => 
            array (
                'client_group_id' => 26,
                'client_group_parent' => 19,
                'client_group_has_child' => 0,
                'client_group_name' => 'Arabic',
                'client_group_desc' => 'Arabic',
                'client_group_image' => 'Arabic2.jpg',
                'client_group_count' => 2,
            ),
            21 => 
            array (
                'client_group_id' => 27,
                'client_group_parent' => 19,
                'client_group_has_child' => 0,
                'client_group_name' => 'Chinese',
                'client_group_desc' => 'Chinese',
                'client_group_image' => 'chinese.jpg',
                'client_group_count' => 2,
            ),
            22 => 
            array (
                'client_group_id' => 29,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'Children, youth & families',
                'client_group_desc' => 'Young people',
                'client_group_image' => 'group_images/young_people.jpg',
                'client_group_count' => 18,
            ),
            23 => 
            array (
                'client_group_id' => 30,
                'client_group_parent' => 29,
                'client_group_has_child' => 0,
                'client_group_name' => 'Children & families',
                'client_group_desc' => 'Children & families',
                'client_group_image' => 'group_images/young_people.jpg',
                'client_group_count' => 12,
            ),
            24 => 
            array (
                'client_group_id' => 31,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'Carers',
                'client_group_desc' => 'Carers',
                'client_group_image' => 'group_images/carer.jpg',
                'client_group_count' => 18,
            ),
            25 => 
            array (
                'client_group_id' => 32,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'Older people',
                'client_group_desc' => 'Older people',
                'client_group_image' => 'group_images/older_people.jpg',
                'client_group_count' => 25,
            ),
            26 => 
            array (
                'client_group_id' => 33,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'Women',
                'client_group_desc' => 'Women',
                'client_group_image' => 'group_images/women.jpg',
                'client_group_count' => 7,
            ),
            27 => 
            array (
                'client_group_id' => 34,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'People with addictions',
                'client_group_desc' => 'People with addictions',
                'client_group_image' => 'group_images/addiction.jpg',
                'client_group_count' => 5,
            ),
            28 => 
            array (
                'client_group_id' => 52,
                'client_group_parent' => 31,
                'client_group_has_child' => 0,
                'client_group_name' => 'Carers',
                'client_group_desc' => 'Carers',
                'client_group_image' => 'group_images/carer.jpg',
                'client_group_count' => 15,
            ),
            29 => 
            array (
                'client_group_id' => 53,
                'client_group_parent' => 32,
                'client_group_has_child' => 0,
                'client_group_name' => 'Older people',
                'client_group_desc' => 'Older people',
                'client_group_image' => 'group_images/older_people.jpg',
                'client_group_count' => 25,
            ),
            30 => 
            array (
                'client_group_id' => 54,
                'client_group_parent' => 34,
                'client_group_has_child' => 0,
                'client_group_name' => 'Multiple addictions',
                'client_group_desc' => 'People with addictions',
                'client_group_image' => 'Multiple_Addictions.JPG',
                'client_group_count' => 2,
            ),
            31 => 
            array (
                'client_group_id' => 55,
                'client_group_parent' => 33,
                'client_group_has_child' => 0,
                'client_group_name' => 'Women',
                'client_group_desc' => 'Women',
                'client_group_image' => 'group_images/women.jpg',
                'client_group_count' => 7,
            ),
            32 => 
            array (
                'client_group_id' => 61,
                'client_group_parent' => 34,
                'client_group_has_child' => 0,
                'client_group_name' => 'Alcohol',
                'client_group_desc' => NULL,
                'client_group_image' => 'category_images/Alcohol.jpg',
                'client_group_count' => 5,
            ),
            33 => 
            array (
                'client_group_id' => 60,
                'client_group_parent' => 31,
                'client_group_has_child' => 0,
                'client_group_name' => 'Young carers',
                'client_group_desc' => NULL,
                'client_group_image' => 'category_images/Young_Carer.jpg',
                'client_group_count' => 11,
            ),
            34 => 
            array (
                'client_group_id' => 62,
                'client_group_parent' => 34,
                'client_group_has_child' => 0,
                'client_group_name' => 'Drugs',
                'client_group_desc' => NULL,
                'client_group_image' => 'group_images/addiction.jpg',
                'client_group_count' => 4,
            ),
            35 => 
            array (
                'client_group_id' => 63,
                'client_group_parent' => 34,
                'client_group_has_child' => 0,
                'client_group_name' => 'Gambling',
                'client_group_desc' => NULL,
                'client_group_image' => 'category_images/Gambling.jpg',
                'client_group_count' => 1,
            ),
            36 => 
            array (
                'client_group_id' => 64,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'General public',
                'client_group_desc' => NULL,
                'client_group_image' => 'group_images/generalpublic.jpg',
                'client_group_count' => 21,
            ),
            37 => 
            array (
                'client_group_id' => 65,
                'client_group_parent' => 64,
                'client_group_has_child' => 0,
                'client_group_name' => 'General public',
                'client_group_desc' => NULL,
                'client_group_image' => 'group_images/generalpublic.jpg',
                'client_group_count' => 21,
            ),
            38 => 
            array (
                'client_group_id' => 66,
                'client_group_parent' => 29,
                'client_group_has_child' => 0,
                'client_group_name' => 'Young people',
                'client_group_desc' => NULL,
                'client_group_image' => 'group_images/youth.jpg',
                'client_group_count' => 18,
            ),
            39 => 
            array (
                'client_group_id' => 1003,
                'client_group_parent' => 1002,
                'client_group_has_child' => 0,
                'client_group_name' => 'Ex-offenders',
                'client_group_desc' => NULL,
                'client_group_image' => 'Ex-Offenders.jpg',
                'client_group_count' => 3,
            ),
            40 => 
            array (
                'client_group_id' => 1002,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'Ex-offenders',
                'client_group_desc' => NULL,
                'client_group_image' => 'Ex-Offenders.jpg',
                'client_group_count' => 3,
            ),
            41 => 
            array (
                'client_group_id' => 1000,
                'client_group_parent' => 1,
                'client_group_has_child' => 1,
                'client_group_name' => 'LGBT',
                'client_group_desc' => NULL,
                'client_group_image' => 'category_images/LGBTflag.jpg',
                'client_group_count' => 3,
            ),
            42 => 
            array (
                'client_group_id' => 1001,
                'client_group_parent' => 1000,
                'client_group_has_child' => 0,
                'client_group_name' => 'LGBT',
                'client_group_desc' => NULL,
                'client_group_image' => 'category_images/LGBTflag.jpg',
                'client_group_count' => 3,
            ),
        ));
        
        
    }
}