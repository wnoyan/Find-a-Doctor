<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
    	$students = Student::all();
    	/*return view('student.index')->with('students', $students);*/

    	return view('specialist_doctors_bd.specialist_doctors.cardiology')->with('students', $students);
    }
}
