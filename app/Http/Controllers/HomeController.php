<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $classes = Classes::all();
        return view("home",compact("courses","classes"));
    }

}
