<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tutore;

class TutoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tutores
        $tutor1 = new Tutore();
        $tutor1->user_id = '2';
        $tutor1->save();
    }
}
