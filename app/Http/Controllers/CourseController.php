<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    private $courses;
    private $course;

    public function add()
    {
        return view('teacher.course.add');
    }
    public function manage()
    {
        $this->courses=Course::all();
        return view('teacher.course.manage',['courses'=>$this->courses]);
    }
    public function create(Request $request)
    {
        Course::newCourse($request);
        return redirect()->back()->with('message','New course create successfull');
    }
    public function edit($id)
    {
        $this->course=Course::find($id);
        return view('teacher.course.edit',['course'=>$this->course]);
    }
    public function update(Request $request, $id)
    {
        Course::updateCourse($request,$id);
        return redirect('/manage-course')->with('message','New course create successfull');
//        return $request->all();
    }
}
