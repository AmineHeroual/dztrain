<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Trainer;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CourseAdminController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::select('id', 'name', 'price', 'img')->orderBy('id', 'DESC')->paginate(6);
        return view('admin.courses.index')->with($data);
    }

    public function create()
    {
        $data['categories'] = Category::select('id', 'name')->get();
        $data['trainers'] = Trainer::select('id', 'name')->get();

        return view('admin.courses.create')->with($data);
    }

    public function store(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required|string|max:50',
            'small_desc' => 'required|string|max:191',
            'desc' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'trainer_id' =>'required|exists:trainers,id',
            'img' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $newImage = $data['img']->hashName();
        Image::make($data['img'])->resize(970,520)->save(public_path('uploads/courses/'.$newImage));

        $data['img'] = $newImage;
        Course::create($data);
        return redirect(route('admin.courses.index'));
    }


    public function edit($id)
    {
        $data['categories'] = Category::select('id', 'name')->get();
        $data['trainers'] = Trainer::select('id', 'name')->get();
        $data['course'] = Course::findOrFail($id);

        return view('admin.courses.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required|string|max:50',
            'small_desc' => 'required|string|max:191',
            'desc' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'trainer_id' =>'required|exists:trainers,id',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $oldImage = Course::findOrFail($request->id)->img;

        if($request->hasFile('img'))
        {
            Storage::disk('uploads')->delete('courses/'. $oldImage);
            $newImage = $data['img']->hashName();
            Image::make($data['img'])->resize(970,520)->save(public_path('uploads/courses/'.$newImage));
            $data['img'] = $newImage;
        }
        else
        {
            $data['img'] = $oldImage;
        }


        Course::findOrFail($request->id)->update($data);
        return back();
    }

    public function delete($id){
        $image = Course::findOrFail($id)->img;
        Storage::disk('uploads')->delete('courses/'. $image);
        Course::findOrFail($id)->delete();

        return back();
    }
}
