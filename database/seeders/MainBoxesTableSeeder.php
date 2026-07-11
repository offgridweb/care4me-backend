<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MainBoxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('main_boxes')->delete();
        
        \DB::table('main_boxes')->insert(array (
            0 => 
            array (
                'box_id' => 1,
                'box_name' => 'Find support services in my area',
                'box_link' => 'index2.php',
                'box_image' => 'services_box.jpg',
                'box_show' => 1,
                'box_desc' => 'Find a service',
            ),
            1 => 
            array (
                'box_id' => 2,
                'box_name' => 'Local Self Help Groups',
                'box_link' => 'index_rod.php?cat=200',
                'box_image' => 'self_help.jpg',
                'box_show' => 1,
                'box_desc' => 'Find a self-help group',
            ),
            2 => 
            array (
                'box_id' => 3,
                'box_name' => 'I need help with a specific condition',
                'box_link' => 'http://www.nhs.uk/Conditions/Pages/hub.aspx',
                'box_image' => 'nhs_choices.jpg',
                'box_show' => 1,
                'box_desc' => 'Find Support for My Condition',
            ),
        ));
        
        
    }
}