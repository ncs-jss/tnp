<?php

use Illuminate\Database\Seeder;
use App\Student;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student;
        $student->rollno = "1309110061";
        $student->email = "nelabhkotiya@gmail.com";
        $student->name = "Nelabh Kotiya";
        $student->contact = "8800607309";
        $student->course = "B. Tech.";
        $student->branch = "CSE";
        $student->save();

    }
}
