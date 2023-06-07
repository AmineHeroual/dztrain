<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\SiteContent;
use App\Models\Student;
use App\Models\Test;
use App\Models\Trainer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['banner'] = SiteContent::select('content')->where('name', 'banner')->first();
        $data['courses'] = Course::select('id','name','small_desc','category_id', 'trainer_id', 'img', 'price')
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();

        $data['courses_count'] = Course::count();
        $data['trainers_count'] = Trainer::count();
        $data['students_count'] = Student::count();

        $data['tests'] = Test::select('name', 'spec', 'desc', 'img')->get();

        // dd($data['courses']);
        return view('front.index')->with($data);
    }
}
