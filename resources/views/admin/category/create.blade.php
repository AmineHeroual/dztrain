@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h6>Categories / Add new</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.categories.index')}}">Back</a>
</div>
<div class="d-flex justify-content-center">
    <form action="{{route('admin.categories.store')}}" method="POST" >
        @csrf
        <div class="fomr-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
            @include('admin.inc.errors')
        </div>

        <button type="submit" class="btn btn-primary">Add</button>

    </form>
</div>

@endsection
