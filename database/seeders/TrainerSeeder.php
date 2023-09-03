<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::create([
            "name"=> "Ahmed",
            "spec"=> "programming",
            "phone"=> "01126258745",
            "image"=> "2.jpg"
        ]);
        Trainer::create([
            "name"=> "Mohamed",
            "spec"=> "English",
            "phone"=> "01126258745",
            "image"=> "3.jpg"
        ]);
        Trainer::create([
            "name"=> "Ali",
            "spec"=> "English",
            "phone"=> "01126258745",
            "image"=> "4.jpg"
        ]);
        Trainer::create([
            "name"=> "Omar",
            "spec"=> "medical",
            "phone"=> "01126258745",
            "image"=> "5.jpg"
        ]);
    }
}
