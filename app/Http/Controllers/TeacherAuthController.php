<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class TeacherAuthController extends Controller
{
    private $email;
    private $password;
    private $teacher;

    public function login()
    {
        return view('teacher.auth.login');
    }
    public function loginCheck(Request $request)
    {
        $this->teacher= Teacher::where('email', $request->email)->first();

        if($this->teacher)
        {
            if (password_verify($request->password, $this->teacher->password))
            {
               Session::put('id', $this->teacher->id);
               Session::put('id', $this->teacher->name);
               Session::put('id', $this->teacher->image);

               return redirect('/teacher-dashboard');
            }
            else
            {
                return redirect()->back()->with('message','Your password is invalid');
            }
        }
        else
        {
            return redirect()->back()->with('message','Your email is invalid');
        }
    }
}
