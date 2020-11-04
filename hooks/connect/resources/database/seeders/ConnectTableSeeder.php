<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConnectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Don't add data if the data is already there
        if (DB::table('connect')->count() > 0) {
            return;
        }

        DB::table('connect')->insert([
            ['name' => 'foo'],
            ['name' => 'bar'],
            ['name' => 'baz'],
        ]);
    }
}
