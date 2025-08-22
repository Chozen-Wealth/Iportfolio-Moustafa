@extends("layouts.app")

@section("content")
<div class="d-flex flex-column" style="overflow: auto; width: calc(100vw - 250px);">
    <div class="d-flex justify-content-center align-items-center">
        <video autoplay muted loop class="video-header" src="{{ asset("storage/video/header.mp4") }}"></video>
        <div class="position-absolute text-light">
            <h1 class="text-center">Developpeur Web FullStack</h1>
            <h1 class="text-center">& Designer</h1>
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