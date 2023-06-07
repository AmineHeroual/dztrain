@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Categories</h2>
    <div>
        <a class="btn btn-sm btn-primary" href="{{route('admin.categories.create')}}">Add+</a>
    </div>
</div>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>

                    @foreach ($categories as $cat)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{$cat->name}}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{route('admin.categories.edit', $cat->id)}}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{route('admin.categories.delete', $cat->id)}}">Delete</a>
                        </td>

                    </tr>
                @endforeach


              </tbody>
            </table>
          </div>
@endsection
