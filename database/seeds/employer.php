<?php

use Illuminate\Database\Seeder;

class employer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employers')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail',
            'password' => Str::random(10),
        ]);
    }
}
