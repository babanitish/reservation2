<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Representation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class RepresentationUserSeeder extends Seeder
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
        DB::table('representation_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $representationUsers = [
            [
                'firstname' => 'Toure',
                'lastname' => 'Abou',
                'when' => '2012-10-02 20:30',
                
            ],
            [
                'firstname' => 'karim',
                'lastname' => 'Benz',
                'when' => '2012-10-12 20:30',
            ],
            [
                'firstname' => 'kylian',
                'lastname' => 'Mbappe',
                'when' => '2012-10-12 13:30',
            ],
        ];

        //Insert data in the table
        foreach ($representationUsers as $data) {
          //  var_dump($representationUsers);

            //Search the artist for a given artist's firstname and lastname
            $user = User::where([
                ['firstname', '=', $data['firstname']],
                ['lastname', '=', $data['lastname']]
            ])->first();
            //Search the type for a given type
            $representation = Representation::firstWhere('when', $data['when']);
            DB::table('representation_user')->insert([
                'user_id' => $user->id,
                'representation_id' => $representation->id,
            ]);
        }
     
    }
}
