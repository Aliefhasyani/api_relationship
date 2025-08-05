<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Mohammad Alief Hasyani',
            'email' => 'aliefhasyani@gmail.com'
        ]);
        Profile::create([
            'name' => 'Andi Muflih',
            'email' => 'muflih@gmail.com'
        ]);
        Profile::create([
            'name' => 'Andi Achmad Raihan',
            'email' => 'raihan@gmail.com'
        ]);

        Profile::create([
            'name' => 'Nabila Nurul',
            'email' => 'nabila@gmail.com'
        ]);
        Profile::create([
            'name' => 'Fikri Akbar',
            'email' => 'fikri.akbar@gmail.com'
        ]);
        Profile::create([
            'name' => 'Siti Zahra',
            'email' => 'zahra.siti@gmail.com'
        ]);
        Profile::create([
            'name' => 'Rizky Pratama',
            'email' => 'rizky.p@gmail.com'
        ]);
    }
}
