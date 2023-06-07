@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Courses / Add new</h2>
    <div>
        <a class="btn btn-sm btn-primary" href="{{route('admin.courses.index')}}">Back</a>
    </div>
</div>
@include('admin.inc.errors')
<div class="d-flex justify-content-center">
    <form action="{{route('admin.courses.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="fomr-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="fomr-group mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="fomr-group mb-3">
            <label>Trainer</label>
            <select name="trainer_id" class="form-control">
                @foreach ($trainers as $trainer)
                <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="fomr-group mb-3">
            <label for="small_desc">Small Description</label>
            <input type="text" name="small_desc" class="form-control">
        </div>
            <div class="fomr-group mb-3">
                <label for="desc">Description</label>
            <textarea name="desc" cols="30" rows="10" class="form-control">
            </textarea>
        </div>
        <div class="fomr-group mb-3">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control">

        </div>
        <div class="fomr-group mb-3">
            <label for="img">Image</label>
            <input type="file" name="img" class="form-control-file">

        </div>

        <button type="submit" class="btn btn-primary">Add</button>

    </form>
</div>

@endsection
