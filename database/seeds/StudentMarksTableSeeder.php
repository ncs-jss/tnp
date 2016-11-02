<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\StudentMark;

class StudentMarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = Student::where('email',"nelabhkotiya@gmail.com")->first();
        $studentMarks = new StudentMark;
        $studentMarks->student_id = $student->id;
        $studentMarks->diploma = 0;
        $studentMarks->Xmarkstype = "CGPA";
        $studentMarks->Xmarks = "9.4";
        $studentMarks->XIImarkstype = "PER";
        $studentMarks->XIImarks = "87.6";
        $studentMarks->sem1 = "75";
        $studentMarks->sem2 = "75";
        $studentMarks->sem3 = "75";
        $studentMarks->sem4 = "75";
        $studentMarks->sem5 = "75";
        $studentMarks->sem6 = "75";
        $studentMarks->sem7 = "75";
        $studentMarks->sem8 = "75";
        $studentMarks->diplomayr1 = "-";
        $studentMarks->diplomayr2 = "-";
        $studentMarks->save();
    }
}
