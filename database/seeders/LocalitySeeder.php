<?php

namespace Database\Seeders;

use App\Models\Locality;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Locality::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');


        //Empty the table first
      //  Locality::truncate();
        //Define data
        $localities = [
            [
                'locality' => 'uccle',
                'postal_code' => '1170',
            ],
            [
                'locality' => 'Bruxelles',
                'postal_code' => '1000',
            ],
            [
                'locality' => 'Bruxelles',
                'postal_code' => '1000',
            ],
            [
                'locality' => 'Bruxelles',
                'postal_code' => '1000',
            ],
        ];

        //Insert data in the table
        DB::table('localities')->insert($localities);
    }
}
