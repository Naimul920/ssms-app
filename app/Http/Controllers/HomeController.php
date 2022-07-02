<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    private $courses;
    public function index()
    {
        $this->courses=Course::all();
        return view('website.home.home',['courses'=>$this->courses]);
    }

    public function about()
    {
        return view('website.about.about');
    }

    public function course()
    {
        return view('website.course.course');
    }

    public function contact()
    {
        return view('website.contact.contact');
    }

    public function login()
    {
        return view('website.login.login');
    }
    public function detail($id)
    {
        $this->course=Course::find($id);
        return view('website.course.detail', ['course'=>$this->course]);
    }

}

