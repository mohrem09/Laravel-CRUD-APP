<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("classes")->insert([
            ["libelle" => "L1"],
            ["libelle" => "L2"],
            ["libelle" => "L3"],
            ["libelle" => "M1"],
            ["libelle" => "M2"],
            ["libelle" => "DA"],
            ["libelle" => "DD"],


        ]);
    }
}
