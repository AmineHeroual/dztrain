@extends('front.layout')

@section('content')


<!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>{{json_decode($banner->content)->title}}</h5>
                            <h1>{{json_decode($banner->content)->subtitle}}</h1>
                            <p>{{json_decode($banner->content)->desc}}</p>
                            <a href="#" class="btn_1">View Course </a>
                            <a href="#" class="btn_2">Get Started </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Awesome <br> Feature</h2>
                        <p>Set have great you male grass yielding an yielding first their you're
                            have called the abundantly fruit were man </p>
                        <a href="#" class="btn_1">Read More</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Better Future</h4>
                            <p>Set have great you male grasses yielding yielding first their to
                                called deep abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Qualified Trainers</h4>
                            <p>Set have great you male grasses yielding yielding first their to called
                                deep abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Job Oppurtunity</h4>
                            <p>Set have great you male grasses yielding yielding first their to called deep
                                abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    {{-- <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="{{ asset('front/img')}}/learning_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>About us</h5>
                        <h2>Learning with Love
                            and Laughter</h2>
                        <p>Fifth saying upon divide divide rule for deep their female all hath brind Days and beast
                            greater grass signs abundantly have greater also
                            days years under brought moveth.</p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>Him lights given i heaven second yielding seas
                                gathered wear</li>
                            <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                                night.</li>
                        </ul>
                        <a href="#" class="btn_1">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$courses_count}}</span>
                        <h4>Courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$trainers_count}}</span>
                        <h4>Trainers</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$students_count}}</span>
                        <h4>Students</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

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
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ asset('uploads/courses/'.$course->img)}}" class="special_img" alt="" height="270" >
                        <div class="special_cource_text">
                            <div style="min-height: 230px">
                                <a href={{ route('front.coursespage', $course->category->id)}} class="btn_4">{{ $course->category->name}}</a>
                                <h4>${{$course->price}}</h4>
                                <a href={{ route('front.showpage', [$course->category->id,$course->id])}}><h3>{{$course->name}}</h3></a>
                                <p>{{$course->small_desc}}</p>
                            </div>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ asset('uploads/trainers/'.$course->trainer->img)}}" alt="" width="50" height="50" style="border-radius: 50%">
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


            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->
    {{-- <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>Advance feature</h5>
                        <h2>Our Advance Educator
                            Learning System</h2>
                        <p>Fifth saying upon divide divide rule for deep their female all hath brind mid Days
                            and beast greater grass signs abundantly have greater also use over face earth
                            days years under brought moveth she star</p>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>Learn Anywhere</h4>
                                    <p>There earth face earth behold she star so made void two given and also our</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>Expert Teacher</h4>
                                    <p>There earth face earth behold she star so made void two given and also our</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="{{ asset('front/img')}}/advance_feature_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- learning part end-->

    <!--::review_part start::-->
    <section class="testimonial_part padding_top pb-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        @foreach ($tests as $test)
                        <div class="testimonial_slider">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>{{$test->desc}}</p>
                                        <h4>{{$test->name}}</h4>
                                        @if ($test->spec !== null)
                                            <h5> {{$test->spec}}</h5>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ asset('uploads/tests/'. $test->img)}}" alt="#" height="220">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>{{$test->desc}}</p>
                                        <h4>{{$test->name}}</h4>
                                        @if ($test->spec !== null)
                                            <h5> {{$test->spec}}</h5>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ asset('uploads/tests/' .$test->img)}}" alt="#" height="220">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!--::blog_part start::-->
    {{-- <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Our Blog</p>
                        <h2>Students Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ asset('front/img')}}/blog/blog_1.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Design</a>
                                <a href="blog.html">
                                    <h5 class="card-title">Dry beginning sea over tree</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ asset('front/img')}}/blog/blog_2.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Developing</a>
                                <a href="blog.html">
                                    <h5 class="card-title">All beginning air two likeness</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ asset('front/img')}}/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Design</a>
                                <a href="blog.html">
                                    <h5 class="card-title">Form day seasons sea hand</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--::blog_part end::-->



@endsection
