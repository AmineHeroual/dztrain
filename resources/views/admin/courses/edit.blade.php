@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h6>Trainers / Edit / {{$course->name}}</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.courses.index')}}">Back</a>
</div>

@include('admin.inc.errors')
<form action="{{route('admin.courses.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$course->id}}">
    <div class="fomr-group mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{$course->name}}">
    </div>
    <div class="fomr-group mb-3">
        <label>Category</label>
        <select name="category_id" class="form-control">
            @foreach ($categories as $category)
            <option value="{{$category->id}}"  @if($course->category->id === $category->id) selected @endif>{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="fomr-group mb-3">
        <label>Trainer</label>
        <select name="trainer_id" class="form-control">
            @foreach ($trainers as $trainer)
            <option value="{{$trainer->id}}" @if($course->trainer->id === $trainer->id) selected @endif>{{$trainer->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="fomr-group mb-3">
        <label for="small_desc">Small Description</label>
        <input type="text" name="small_desc" class="form-control" value="{{$course->small_desc}}">
    </div>
        <div class="fomr-group mb-3">
            <label for="desc">Description</label>
        <textarea name="desc" cols="30" rows="5" class="form-control">{{$course->desc}}</textarea>
    </div>
    <div class="fomr-group mb-3">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" value="{{$course->price}}">

    </div>
    <img src="{{asset('uploads/courses/'. $course->img)}}" alt="" height="100px" class="my-3">
    <div class="fomr-group mb-3">
        <label for="img">Image</label>
        <input type="file" name="img" class="form-control-file">

    </div>

    <button type="submit" class="btn btn-primary">Add</button>

</form>

@endsection
