@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Trainers</h2>

    <div>
        <a class="btn btn-sm btn-primary" href="{{route('admin.trainers.create')}}">Add+</a>
    </div>
</div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Spec</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $trainer)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>
                            <img src="{{asset('uploads/trainers/' .$trainer->img)}}" alt="" height="50px" style="border-radius: 50%;">
                        </td>
                        <td>{{$trainer->name}}</td>
                        @if ($trainer->phone !== null)
                            <td>{{$trainer->phone}}</td>
                        @else
                            <td>not exist!</td>
                        @endif
                        <td>{{$trainer->spec}}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{route('admin.trainers.edit', $trainer->id)}}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{route('admin.trainers.delete', $trainer->id)}}">Delete</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
          </table>


@endsection
