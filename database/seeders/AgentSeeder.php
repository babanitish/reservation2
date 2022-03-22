<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Artist;

class AgentSeeder extends Seeder
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
         Artist::truncate();
         DB::statement('SET FOREIGN_KEY_CHECKS=1');
         
        $agents = [
            ['firstname' => 'Ced', 'lastname' => 'Ruth', 'artist_id' => '1'],
        ];

        

        DB::table('agents')->insert($agents);
    }
}
