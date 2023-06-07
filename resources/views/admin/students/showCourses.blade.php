@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Students / [{{$student->name}}] / Enroll Courses </h2>
    <div>
        <a class="btn btn-sm btn-primary" href="{{route('admin.students.addCourse' ,$student_id)}}">Add new Course</a>
        <a class="btn btn-sm btn-info" href="{{route('admin.students.index')}}">back+</a>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>

        </tr>
      </thead>
      <tbody>

            @foreach ($courses as $course)
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{$course->name}}</td>
                <td class="text-info">{{$course->pivot->status }}</td>
                <td>
                    @if ($course->pivot->status !== 'approve')
                    <a class="btn btn-sm btn-success" href="{{route('admin.students.approve', [$student_id, $course->id])}}">Approve</a>
                    @endif

                    @if ($course->pivot->status !== 'reject')
                    <a class="btn btn-sm btn-danger" href="{{route('admin.students.reject', [$student_id, $course->id])}}">Reject</a>
                    @endif
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
