<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Date;
use Illuminate\Support\Boolean;

class candidate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidates')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail',
            'password' => Str::random(10),
        ]);
    }
}
