<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Show;
use App\Models\Category;


class CategorySeeder extends Seeder
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
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $categories = [
            ['name' => 'theatre'],
            ['name' => 'danse'],
            ['name' => 'cirque']
        ];

        // foreach ($categories as  &$data) {
            // $show = Show::firstWhere('title', $data['show']);
            // unset($data['show']);
            // $data['show_id'] = $show->id ?? null;
            // unset($data);

            //Insert data in the table
            DB::table('categories')->insert($categories);
        //}
    }
}
