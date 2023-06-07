@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h6>Trainers / Edit / {{$trainer->name}}</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.trainers.index')}}">Back</a>
</div>

@include('admin.inc.errors')
        <form action="{{route('admin.trainers.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$trainer->id}}">
            <div class="fomr-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$trainer->name}}">
            </div>
            <div class="fomr-group mb-3">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{$trainer->phone}}">

            </div>

            <div class="fomr-group mb-3">
                <label for="spec">Speciality</label>
                <input type="text" name="spec" class="form-control" value="{{$trainer->spec}}">

            </div>
            <img src="{{asset('uploads/trainers/'. $trainer->img)}}" alt="" height="100px" class="my-3">
            <div class="fomr-group mb-3">

                <label for="img">Image</label>
                <input type="file" name="img" class="form-control-file">

            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>

@endsection
