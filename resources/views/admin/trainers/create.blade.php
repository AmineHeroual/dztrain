@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Trainers / Add new</h2>
    <div>
        <a class="btn btn-sm btn-primary" href="{{route('admin.trainers.index')}}">Back</a>
    </div>
</div>
@include('admin.inc.errors')
<div class="d-flex justify-content-center">
    <form action="{{route('admin.trainers.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="fomr-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">

        </div>
        <div class="fomr-group mb-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control">

        </div>

        <div class="fomr-group mb-3">
            <label for="spec">Speciality</label>
            <input type="text" name="spec" class="form-control">

        </div>

        <div class="fomr-group mb-3">
            <label for="img">Image</label>
            <input type="file" name="img" class="form-control-file">

        </div>

        <button type="submit" class="btn btn-primary">Add</button>

    </form>
</div>

@endsection
