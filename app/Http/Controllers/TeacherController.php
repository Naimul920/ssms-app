<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    private $teachers;
    private $teacher;

    public function add()
    {
        return view('admin.teacher.add');
    }
    public function create(Request $request)
    {
        Teacher::newTeacher($request);
        return redirect('/add-teacher')->with('message','Teacher Create Successfull');
    }
    public function manage()
    {
        $this->teachers=Teacher::all();
        return view('admin.teacher.manage',['teachers'=>$this->teachers]);
    }
    public function edit($id)
    {
       $this->teacher=Teacher::find($id);
        return view('admin.teacher.edit',['teacher'=>$this->teacher]);
    }
    public function update(Request $request, $id)
    {
        Teacher::updateTeacher($request, $id);
        return redirect('/manage-teacher')->with('message','Teacher info edit Successfull');
    }
    public function delete($id)
    {
        return 'delete';
    }
}
