<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Networks;
use App\Models\StudentsAch;
use App\Models\LecturersAct;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        User::factory(2)->create();

        LecturersAct::factory(30)->create();

        Networks::factory(30)->create();

        StudentsAch::factory(35)->create();

        // LecturersAct::create([
        //     'name' => 'Muhammad Indrawan Jatmika',
        //     'activity' => 'Riset Konektivitas Asia- Uni Eropa: Potensi Ekonomi Digital (2020)',
        //     'organizer' => 'Kemitraan Komunitas Indonesia untuk Kajian Eropa dengan Kementerian Luar Negeri Republik Indonesia'
        // ]);

        // LecturersAct::create([
        //     'name' => 'Renitha Dwi Hapsari',
        //     'activity' => 'International Humanitarian Law Course (2019)',
        //     'organizer' => 'ICRC & Univ. Muhammadiyah Malang'
        // ]);

        // LecturersAct::create([
        //     'name' => 'Renitha Dwi Hapsari',
        //     'activity' => 'Visiting Lecture (2019)',
        //     'organizer' => 'Univ. Internasional Batam'
        // ]);

    }
}
