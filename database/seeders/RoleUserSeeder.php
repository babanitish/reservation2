<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\User;
class RoleUserSeeder extends Seeder
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
        DB::table('role_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        //Define data
        $roleUsers = [
            [
                'firstname'=>'Toure',
                'lastname'=>'Abou',
                'role'=>'admin',
            ],
            [
                'firstname'=>'Toure',
                'lastname'=>'Abou',
                'role'=>'responsable',
            ],
            [
                'firstname'=>'karim',
                'lastname'=>'Benzema',
                'role'=>'editeur',
            ],
        ]; 
        //Prepare the data
        foreach ($roleUsers as &$data) {
            //Search the artist for a given artist's firstname and lastname
            $user = User::where([
                ['firstname', '=', $data['firstname']],
                ['lastname', '=', $data['lastname']]
            ])->first();

            //Search the type for a given type
            $role = Role::firstWhere('role', $data['role']);

            DB::table('role_user')->insert([
                'user_id' => $user->id,
                'role_id' => $role->id,
            ]);

        }

    }
    
}
