<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Bundle;
use App\Models\auth\User;
// use App\Models\BundleCourses;

use App\Models\NewHome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class NewHomeController extends Controller
{
    public function index()
    {
        
        // $bundle = Bundle::where('popular','=',0)->where('published','=',1)->get();
        // $course = Course::where('popular','=',1)->where('published','=',1)->get();
        // $category = Category::where('status','=','1')->get();
        // $teacher = User::role('teacher')->get();



        // return view('frontend.newIndex', compact('bundle' , 'course', 'teacher', 'category'));
        return view('frontend.newIndex')->with([


            'course'=>Course::where('popular','=',1)->where('published','=',1)->get(),
            'bundle'=>Bundle::where('popular','=',1)->where('published','=',1)->get(),
            'teacher'=>User::role('teacher')->get(),
            'category'=> Category::where('status','=','1')->get()
        ]);
    }

    public function showCourse(Request $request)
    {
        $courseAll = Course::all();
        // dd($courseAll);
        if ($request->keyword != '') {
            $courseAll = Course::where('title', 'LIKE', '%'.$request->keyword.'%')->get();
        }
        return response()->json([
            'courses' => $courseAll
        ]);
    }
}
