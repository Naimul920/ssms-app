<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function add()
    {
        return view('teacher.course.add');
    }
    public function manage()
    {
        return view('teacher.course.manage');
    }
    public function create(Request $request)
    {
        Course::newCourse($request);
        return redirect()->back()->with('message','New course create successfull');
    }
}
