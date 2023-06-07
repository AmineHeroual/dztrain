<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Student;
use App\Models\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Newsletter;

class HomeAdminController extends Controller
{
    public function index()
    {
        $data['newsletters'] = Newsletter::select('id', 'email')->orderBy('id', 'DESC')->paginate(10);
        $data['messages'] = Message::select('id','name', 'email', 'subject','message', 'created_at', 'updated_at')->orderBy('id', 'DESC')->paginate(10);
        $data['courses_count'] = Course::count();
        $data['trainers_count'] = Trainer::count();
        $data['students_count'] = Student::count();
        return view('admin.index')->with($data);
    }
}
