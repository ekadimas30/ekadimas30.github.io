<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Kemeja'
        ]);

        DB::table('categories')->insert([
            'name' => 'Celana'
        ]);

        DB::table('categories')->insert([
            'name' => 'Kaos'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jaket'
        ]);

        DB::table('categories')->insert([
            'name' => 'Rok'
        ]);
    }
}
