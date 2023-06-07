@extends('front.layout')

@section('content')

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Our Courses</h2>
                        <p>Home<span>/</span>Courses<span>/</span>{{$category->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--::review_part start::-->
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>popular courses</p>
                    <h2>Special Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $course)
            <div class="col-sm-6 col-lg-4 mb-5">
                <div class="single_special_cource">
                    <img src="{{ asset('uploads/courses/'.$course->img)}}" class="special_img" alt="" width="370" height="250">
                    <div class="special_cource_text">
                        <a href={{ route('front.coursespage', $course->category->id)}} class="btn_4">{{ $course->category->name}}</a>
                        <h4>${{$course->price}}</h4>
                        <a href={{ route('front.showpage', [$course->category->id, $course->id])}}><h3>{{$course->name}}</h3></a>
                        <p>{{$course->small_desc}}</p>
                        <div class="author_info">
                            <div class="author_img">
                                <img src="{{ asset('uploads/trainers/'.$course->trainer->img)}}" alt="" width="50" height="50">
                                <div class="author_info_text">
                                    <p>Conduct by:</p>
                                    <h5><a href="#">{{$course->trainer->name}}</a></h5>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            {{-- <div class="d-flex flex-row justify-content-center">
                {!! $courses->render() !!}
            </div> --}}

            <div class="d-flex justify-content-center w-100 mb-5">
                {!! $courses->withQueryString()->links('pagination::bootstrap-4') !!}
            </div>



        </div>
    </div>
</section>
<!--::blog_part end::-->

@endsection
