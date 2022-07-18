<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    private $courses;

    public function manage()
    {
        $this->courses=Course::all();
        return view('admin.course.manage',['courses'=>$this->courses]);
    }
}
