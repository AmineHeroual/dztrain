@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h6>Students / Add new</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.students.index')}}">Back</a>
</div>
@include('admin.inc.errors')
<div class="d-flex justify-content-center">
    <form action="{{route('admin.students.store')}}" method="POST" >
        @csrf
        <div class="fomr-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="fomr-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="fomr-group mb-3">
            <label for="spec">speciality</label>
            <input type="text" name="spec" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>

    </form>
</div>

@endsection
