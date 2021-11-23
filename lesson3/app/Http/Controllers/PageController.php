<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Work;

class PageController extends Controller
{
    
    public function studentPage(){

        $students = Student::all();

        return view('student', [
            "pageName"=> "Student Page",
            "students"=> $students,
        ]);
    }

    public function workPage($id){

        $work = Student::find($id);
        if(!$work){
            return abort(404);
        }
  
        return view('work', [
            "pageName"=> $work['name'],
            "work"=> $work,
        ]);
    }
}
