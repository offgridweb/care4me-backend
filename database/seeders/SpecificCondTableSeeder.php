<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpecificCondTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('specific_cond')->delete();
        
        \DB::table('specific_cond')->insert(array (
            0 => 
            array (
                'sc_cat_id' => 2,
                'sc_cat_parent' => 1,
                'sc_cat_name' => 'Abortion',
                'sc_cat_desc' => NULL,
            ),
            1 => 
            array (
                'sc_cat_id' => 8,
                'sc_cat_parent' => 6,
                'sc_cat_name' => 'Cervical cancer ',
                'sc_cat_desc' => NULL,
            ),
            2 => 
            array (
                'sc_cat_id' => 4,
                'sc_cat_parent' => 1,
                'sc_cat_name' => 'Aphasia ',
                'sc_cat_desc' => NULL,
            ),
            3 => 
            array (
                'sc_cat_id' => 10,
                'sc_cat_parent' => 6,
                'sc_cat_name' => 'Lung cancer ',
                'sc_cat_desc' => NULL,
            ),
            4 => 
            array (
                'sc_cat_id' => 6,
                'sc_cat_parent' => 1,
                'sc_cat_name' => 'Cancer',
                'sc_cat_desc' => NULL,
            ),
            5 => 
            array (
                'sc_cat_id' => 7,
                'sc_cat_parent' => 1,
                'sc_cat_name' => 'Anorexia nervosa ',
                'sc_cat_desc' => NULL,
            ),
            6 => 
            array (
                'sc_cat_id' => 9,
                'sc_cat_parent' => 6,
                'sc_cat_name' => 'Breast cancer',
                'sc_cat_desc' => NULL,
            ),
            7 => 
            array (
                'sc_cat_id' => 11,
                'sc_cat_parent' => 6,
                'sc_cat_name' => 'Testicular cancer ',
                'sc_cat_desc' => NULL,
            ),
            8 => 
            array (
                'sc_cat_id' => 12,
                'sc_cat_parent' => 1,
                'sc_cat_name' => 'Cerebral palsy',
                'sc_cat_desc' => NULL,
            ),
            9 => 
            array (
                'sc_cat_id' => 13,
                'sc_cat_parent' => 1,
                'sc_cat_name' => 'Contraception',
                'sc_cat_desc' => NULL,
            ),
        ));
        
        
    }
}