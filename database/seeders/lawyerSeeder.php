<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\lawyer;
use Illuminate\Support\Facades\File;

class lawyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/data.json');
        $laywers = collect(json_decode($json));
        $laywers->each(function ($inserting) {

            lawyer::create([

                'name' => $inserting->firstname,
                'lastname' => $inserting->lastname,
                'city' => $inserting->city,
                'phone' => $inserting->phoneno,



            ]);

        });


    }
}
