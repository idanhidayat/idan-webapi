<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
        	'nama' => 'Idan Zola',
        	'jk' => 'L'
        ]);

        Teacher::create([
        	'nama' => 'Abdul Dilan',
        	'jk' => 'L'
        ]);

        Teacher::create([
        	'nama' => 'Milea',
        	'jk' => 'P'
        ]);
    }
}
