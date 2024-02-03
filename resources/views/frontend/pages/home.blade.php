@extends('frontend.layouts.app')

@section('title','Home')

    @section('content')

        @include('frontend.pages.Home.banner')

            <div class="row text-center">
                <h2 class="py-5">Our Collections</h2>
            </div>
        @include('frontend.pages.Home.tabs')

        <div class="row text-center">
            <h2 class="py-5">Our Letest Courses</h2>
        </div>

            @include('frontend.pages.Home.letest')

            <div class="row text-center">
                <h2 class="py-5">Our Testimonials</h2>
            </div>

            @include('frontend.pages.Home.testimonials')
    @endsection
