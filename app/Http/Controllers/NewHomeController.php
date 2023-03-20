<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Bundle;
use App\Models\auth\User;

use App\Models\NewHome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewHomeController extends Controller
{
    public function index()
    {
        // $teacher = NewHome::select('*')
        //     ->get();
        // return view('frontend.newIndex', ['teach' => $teacher]);

        // return view('frontend.auth.newhome');

        return view('frontend.newIndex')->with([


            'course'=>Course::where('popular','=',1)->where('published','=',1)->get(),
            'bundle'=>Bundle::where('popular','=',1)->where('published','=',1)->get(),
            'teacher'=>User::role('teacher')->get()

        


        ]);
    }
}
