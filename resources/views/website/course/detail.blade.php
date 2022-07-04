@extends('website.master')
@section('title')
    COURSE DETAIL
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <img src="{{asset($course->image)}}" alt="" class="card-img-top" width="100" height="500">
                    </div>
                </div>
                <div class="col-md-6 mx-auto">
                    <h1 class="text-center">{{$course->title}}</h1>
                    <hr>
                    <p class="">{{$course->short_description}}</p>
                    <h3 class="">Course Fee: Tk. {{$course->fee}}</h3>
                    <hr>
                    <a href="{{route('enroll.course')}}" class="btn btn-outline-info ">Enroll Course</a>
                </div>
            </div>
        </div>
    </section>
@endsection
