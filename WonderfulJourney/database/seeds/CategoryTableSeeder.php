<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Beach'],
            ['id' => 2, 'name' => 'Mountain'],
            ['id' => 3, 'name' => 'Lake'],
            ['id' => 4, 'name' => 'River'],
            ['id' => 5, 'name' => 'Forest']
        ]);
    }
}
