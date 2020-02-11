<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
        	'nama' => 'Idan Zola',
        	'jk' => 'L'
        ]);

        Student::create([
        	'nama' => 'Abdul Dilan',
        	'jk' => 'L'
        ]);

        Student::create([
        	'nama' => 'Milea',
        	'jk' => 'P'
        ]);
    }
}
