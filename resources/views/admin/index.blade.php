@extends('admin.layout')



@section('content')


<section class="member_counter">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-sm-3 m-2 py-5 bg-warning">
                <div class="single_member_counter">
                    <h1 class="counter">{{$courses_count}}</h1>
                    <h4>Courses</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 m-2 py-5 bg-info">
                <div class="single_member_counter">
                    <h1 class="counter">{{$trainers_count}}</h1>
                    <h4>Trainers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 m-2 py-5 bg-success">
                <div class="single_member_counter">
                    <h1 class="counter">{{$students_count}}</h1>
                    <h4>Students</h4>
                </div>
            </div>

        </div>
    </div>
    <div class="table-responsive">
        <h1>Newsletters</h1>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">email</th>
                {{-- <th scope="col">Actions</th> --}}
            </tr>
          </thead>
          <tbody>
                @foreach ($newsletters as $letter)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{$letter->email}}</td>
                </tr>
            @endforeach


          </tbody>
        </table>
      </div>
      <div class="table-responsive">
        <h1>Messages</h1>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Create_at</th>
                <th scope="col">Update_at</th>
                {{-- <th scope="col">Actions</th> --}}
            </tr>
          </thead>
          <tbody>
                @foreach ($messages as $msg)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{$msg->name}}</td>
                    <td>{{$msg->email}}</td>
                    <td>{{$msg->subject}}</td>
                    <td>{{$msg->created_at}}</td>
                    <td>{{$msg->updated_at}}</td>
                </tr>
            @endforeach


          </tbody>
        </table>
      </div>
</section>

@endsection
