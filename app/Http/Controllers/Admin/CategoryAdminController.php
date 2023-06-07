<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::select('id', 'name')->orderBy('id', 'DESC')->get();
        return view('admin.category.index')->with($data);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required|string|max:20',
        ]);

        Category::create($data);
        return redirect(route('admin.categories.index'));
    }


    public function edit($id)
    {

        $data['category'] = Category::findOrFail($id);

        return view('admin.category.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required|string|max:20',
        ]);

        Category::findOrFail($request->id)->update($data);
        return back();
    }

    public function delete($id){
        Category::findOrFail($id)->delete();

        return back();
    }

}
