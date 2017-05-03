<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title' => 'root',
            'left_key' => 1,
            'right_key' => 2,
            'level' => 0
        ]);
    }
}
