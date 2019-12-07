<?php

use Illuminate\Database\Seeder;

class offre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offres')->insert([
            'title' => Str::random(10),
            'intitule' => Str::random(10),
            'type' => Str::random(10),
            'domaine' => Str::random(10),
            'diplome' => Str::random(10),
            'anneesExperience' => Str::random(10),
            'description' => Str::random(10),
            'lieuTravaille' => Str::random(10),
            'competence' => Str::random(10),
            'remuniration' => Str::random(10),
            'date_depot' => '2019-12-06 21:05:45',
            'status' => true,
            'date_prevue' => '2019-12-06 21:05:45',
            'duree_stage' => '2019-12-06 21:05:45',
            'employer_id' => 5,
        ]);
    }
}
