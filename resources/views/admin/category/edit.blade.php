@extends('admin.layout')


@section('content')

<div class="d-flex justify-content-between mb-3">

    <h6>Categories / Edit / {{$category->name}}</h6>
    <a class="btn btn-sm btn-primary" href="{{route('admin.categories.index')}}">Back</a>
</div>

        <form action="{{route('admin.categories.update')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$category->id}}">
            <div class="fomr-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$category->name}}">
                @include('admin.inc.errors')
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>

@endsection
