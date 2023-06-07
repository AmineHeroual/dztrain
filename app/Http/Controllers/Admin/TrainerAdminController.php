<?php

namespace App\Http\Controllers\Admin;

use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TrainerAdminController extends Controller
{
    public function index()
    {
        $data['trainers'] = Trainer::select('id', 'name', 'phone', 'spec', 'img')->orderBy('id', 'DESC')->get();
        return view('admin.trainers.index')->with($data);
    }

    public function create()
    {
        return view('admin.trainers.create');
    }

    public function store(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required|string|max:50',
            'spec' => 'required|string|max:50',
            'phone' => 'nullable|string|max:50',
            'img' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $newImage = $data['img']->hashName();
        Image::make($data['img'])->resize(50,50)->save(public_path('uploads/trainers/'.$newImage));

        $data['img'] = $newImage;
        Trainer::create($data);
        return redirect(route('admin.trainers.index'));
    }


    public function edit($id)
    {

        $data['trainer'] = Trainer::findOrFail($id);

        return view('admin.trainers.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required|string|max:50',
            'spec' => 'required|string|max:50',
            'phone' => 'nullable|string|max:50',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $oldImage = Trainer::findOrFail($request->id)->img;

        if($request->hasFile('img'))
        {
            Storage::disk('uploads')->delete('trainers/'. $oldImage);
            $newImage = $data['img']->hashName();
            Image::make($data['img'])->resize(50,50)->save(public_path('uploads/trainers/'.$newImage));
            $data['img'] = $newImage;
        }
        else
        {
            $data['img'] = $oldImage;
        }


        Trainer::findOrFail($request->id)->update($data);
        return back();
    }

    public function delete($id){
        $image = Trainer::findOrFail($id)->img;
        Storage::disk('uploads')->delete('trainers/'. $image);
        Trainer::findOrFail($id)->delete();

        return back();
    }
}
