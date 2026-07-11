<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SelfHelpCatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('self_help_cats')->delete();
        
        \DB::table('self_help_cats')->insert(array (
            0 => 
            array (
                'sh_cat_id' => 1,
                'sh_cat_parent' => 1,
                'sh_cat_name' => 'Addiction',
                'sh_cat_desc' => NULL,
            ),
            1 => 
            array (
                'sh_cat_id' => 3,
                'sh_cat_parent' => 1,
                'sh_cat_name' => 'Cancer',
                'sh_cat_desc' => NULL,
            ),
            2 => 
            array (
                'sh_cat_id' => 4,
                'sh_cat_parent' => 1,
                'sh_cat_name' => 'Children',
                'sh_cat_desc' => NULL,
            ),
            3 => 
            array (
                'sh_cat_id' => 5,
                'sh_cat_parent' => 1,
                'sh_cat_name' => 'Disability',
                'sh_cat_desc' => NULL,
            ),
            4 => 
            array (
                'sh_cat_id' => 6,
                'sh_cat_parent' => 1,
                'sh_cat_name' => 'Mental Health',
                'sh_cat_desc' => NULL,
            ),
            5 => 
            array (
                'sh_cat_id' => 7,
                'sh_cat_parent' => 2,
                'sh_cat_name' => 'Alcohol',
                'sh_cat_desc' => NULL,
            ),
            6 => 
            array (
                'sh_cat_id' => 8,
                'sh_cat_parent' => 2,
                'sh_cat_name' => 'Gambling',
                'sh_cat_desc' => NULL,
            ),
            7 => 
            array (
                'sh_cat_id' => 9,
                'sh_cat_parent' => 2,
                'sh_cat_name' => 'Cigarettes / Nicotine',
                'sh_cat_desc' => NULL,
            ),
            8 => 
            array (
                'sh_cat_id' => 10,
                'sh_cat_parent' => 4,
                'sh_cat_name' => 'Education / development',
                'sh_cat_desc' => NULL,
            ),
            9 => 
            array (
                'sh_cat_id' => 11,
                'sh_cat_parent' => 4,
                'sh_cat_name' => 'Learning / behaviour',
                'sh_cat_desc' => NULL,
            ),
            10 => 
            array (
                'sh_cat_id' => 12,
                'sh_cat_parent' => 4,
                'sh_cat_name' => 'Parenting / family support',
                'sh_cat_desc' => NULL,
            ),
            11 => 
            array (
                'sh_cat_id' => 13,
                'sh_cat_parent' => 6,
                'sh_cat_name' => 'Dementia',
                'sh_cat_desc' => NULL,
            ),
            12 => 
            array (
                'sh_cat_id' => 14,
                'sh_cat_parent' => 6,
                'sh_cat_name' => 'Depression',
                'sh_cat_desc' => NULL,
            ),
            13 => 
            array (
                'sh_cat_id' => 15,
                'sh_cat_parent' => 6,
                'sh_cat_name' => 'Stress / Phobia',
                'sh_cat_desc' => NULL,
            ),
        ));
        
        
    }
}