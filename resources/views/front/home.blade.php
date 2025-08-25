@extends("layouts.app")

@section("content")
<div class="d-flex flex-column" style="overflow: auto; padding-left: 250px; position: relative;">
    <div class="d-flex justify-content-center align-items-center w-100">
        <div class="degrader-video"></div>
        <video autoplay muted loop class="video-header" src="{{ asset("storage/video/header.mp4") }}"></video>
        <div class="position-absolute">
            <h1 class="text-center" style="font-size: 80px; color: rgb(255, 255, 255);letter-spacing: -3px">FULLSTACK WEB DEVELOPER</h1>
            <h1 class="text-center" style="font-size: 70px; color: rgb(255, 255, 255);letter-spacing: -3px">& GRAPHIC DESIGNER</h1>
        </div>
    </div>
    @include("front.partials.about")
    @include("front.partials.skills")
    @include("front.partials.portfolios")
    @include("front.partials.services")
    @include("front.partials.testimonials")
    @include("front.partials.contacts")
</div>
@endsection