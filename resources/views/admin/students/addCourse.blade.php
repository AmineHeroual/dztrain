@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h6>Students / Edit / {{$student->name}} / add Course</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.students.index')}}">Back</a>
</div>
@include('admin.inc.errors')

        <form action="{{route('admin.students.storeCourse', $student_id)}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$student_id}}">
            <div class="fomr-group mb-3">
                <label>Course</label>
                <select name="course_id" class="form-control">
                    @foreach ($courses as $course)
                    <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>

        </form>

@endsection
