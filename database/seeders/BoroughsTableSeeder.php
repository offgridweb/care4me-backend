<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BoroughsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('boroughs')->delete();
        
        \DB::table('boroughs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Barking and Dagenham',
                'latitude' => '51.5450',
                'longitude' => '0.1290',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Barnet',
                'latitude' => '51.6250',
                'longitude' => '-0.1520',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bexley',
                'latitude' => '51.4560',
                'longitude' => '0.1510',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Brent',
                'latitude' => '51.5580',
                'longitude' => '-0.2810',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bromley',
                'latitude' => '51.4050',
                'longitude' => '0.0140',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Camden',
                'latitude' => '51.5400',
                'longitude' => '-0.1430',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Croydon',
                'latitude' => '51.3720',
                'longitude' => '-0.1090',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Ealing',
                'latitude' => '51.5130',
                'longitude' => '-0.3080',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Enfield',
                'latitude' => '51.6530',
                'longitude' => '-0.0800',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Greenwich',
                'latitude' => '51.4890',
                'longitude' => '0.0640',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Hackney',
                'latitude' => '51.5450',
                'longitude' => '-0.0550',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Hammersmith and Fulham',
                'latitude' => '51.4920',
                'longitude' => '-0.2230',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Haringey',
                'latitude' => '51.5900',
                'longitude' => '-0.1100',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Harrow',
                'latitude' => '51.5800',
                'longitude' => '-0.3420',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Havering',
                'latitude' => '51.5770',
                'longitude' => '0.2120',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Hillingdon',
                'latitude' => '51.5350',
                'longitude' => '-0.4480',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Hounslow',
                'latitude' => '51.4670',
                'longitude' => '-0.3610',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Islington',
                'latitude' => '51.5380',
                'longitude' => '-0.0990',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Kensington and Chelsea',
                'latitude' => '51.4990',
                'longitude' => '-0.1930',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Kingston upon Thames',
                'latitude' => '51.4120',
                'longitude' => '-0.3000',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Lambeth',
                'latitude' => '51.4600',
                'longitude' => '-0.1160',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Lewisham',
                'latitude' => '51.4450',
                'longitude' => '-0.0210',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Merton',
                'latitude' => '51.4100',
                'longitude' => '-0.1900',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Newham',
                'latitude' => '51.5250',
                'longitude' => '0.0350',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Redbridge',
                'latitude' => '51.5880',
                'longitude' => '0.0820',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Richmond upon Thames',
                'latitude' => '51.4610',
                'longitude' => '-0.3030',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Southwark',
                'latitude' => '51.5030',
                'longitude' => '-0.0880',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Sutton',
                'latitude' => '51.3610',
                'longitude' => '-0.1940',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Tower Hamlets',
                'latitude' => '51.5200',
                'longitude' => '-0.0290',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Waltham Forest',
                'latitude' => '51.5900',
                'longitude' => '-0.0180',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Wandsworth',
                'latitude' => '51.4560',
                'longitude' => '-0.1910',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Westminster',
                'latitude' => '51.4970',
                'longitude' => '-0.1350',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'City of London',
                'latitude' => '51.5150',
                'longitude' => '-0.0920',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'id' => 99,
                'name' => 'Any',
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => '2026-01-17 11:32:45',
                'updated_at' => '2026-01-17 11:32:45',
            ),
        ));
        
        
    }
}