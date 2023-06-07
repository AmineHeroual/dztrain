@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>courses</h2>

    <div>
        <a class="btn btn-sm btn-primary" href="{{route('admin.courses.create')}}">Add+</a>
    </div>
</div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>
                            <img src="{{asset('uploads/courses/' .$course->img)}}" alt="" height="50px">
                        </td>
                        <td>{{$course->name}}</td>
                        <td>{{$course->price}}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{route('admin.courses.edit', $course->id)}}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{route('admin.courses.delete', $course->id)}}">Delete</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
          </table>

          <div class="d-flex justify-content-center w-100 mb-5">
            {!! $courses->withQueryString()->links('pagination::bootstrap-4') !!}
        </div>


@endsection
