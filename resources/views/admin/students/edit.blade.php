@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h6>Students / Edit / {{$student->name}}</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.students.index')}}">Back</a>
</div>
@include('admin.inc.errors')

        <form action="{{route('admin.students.update')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$student->id}}">
            <div class="fomr-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$student->name}}">
            </div>

            <div class="fomr-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{$student->email}}">
            </div>

            <div class="fomr-group mb-3">
                <label for="spec">speciality</label>
                <input type="text" name="spec" class="form-control" {{$student->spec}}>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>

        </form>

@endsection
