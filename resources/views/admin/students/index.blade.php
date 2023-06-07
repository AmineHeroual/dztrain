@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>students</h2>
    <div>
        <a class="btn btn-sm btn-primary" href="{{route('admin.students.create')}}">Add+</a>
    </div>
</div>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Spec</th>
                    <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>

                    @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        @if($student->spec !== null)
                            <td>{{$student->name}}</td>
                        @else
                            <td>Not Selected</td>
                        @endif
                        <td>
                            <a class="btn btn-sm btn-info" href="{{route('admin.students.edit', $student->id)}}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{route('admin.students.delete', $student->id)}}">Delete</a>
                            <a class="btn btn-sm btn-primary" href="{{route('admin.students.showCourses', $student->id)}}">Courses</a>
                        </td>

                    </tr>
                @endforeach


              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-center w-100 mb-5">
            {!! $students->withQueryString()->links('pagination::bootstrap-4') !!}
        </div>
@endsection
