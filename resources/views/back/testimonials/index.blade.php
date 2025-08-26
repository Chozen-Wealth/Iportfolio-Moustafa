@extends("layouts.back")

@section("content")
    <section id="testimonials" style="width: 100vw; padding: 50px; padding-left: 300px;">
        <h1>Testimonials</h1>
        <hr class="hr-title">
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-primary" href="{{ route("create_testimonials") }}">+ Ajouter</a>
        </div>
        <div class="test-grid">
            @foreach ($testimonials as $testimonial)
                <div class="d-flex flex-column align-items-center">
                    <div class="box-bulle">
                        <div class="bg-light p-4">
                            <p class="text-center">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                                fill="rgb(184, 213, 225)" viewBox="0 0 24 24" >
                                <path d="m21.01,10h-2.85c.27-1.02,1.01-2.51,3.09-3.03l.76-.19v-2.78h-1c-2.78,0-4.91.77-6.31,2.29-1.89,2.05-1.7,4.68-1.69,4.71v7c0,1.1.9,2,2,2h6c1.1,0,2-.9,2-2v-6c0-1.1-.9-2-2-2Z"></path><path d="m9.01,10h-2.85c.27-1.02,1.01-2.51,3.09-3.03l.76-.19v-2.78h-1c-2.78,0-4.91.77-6.31,2.29-1.89,2.05-1.7,4.68-1.69,4.71v7c0,1.1.9,2,2,2h6c1.1,0,2-.9,2-2v-6c0-1.1-.9-2-2-2Z"></path>
                                </svg>
                            {{ $testimonial->comment }}
                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                                fill="rgb(184, 213, 225)" viewBox="0 0 24 24" >
                                <path d="M3 14h2.85c-.27 1.02-1.01 2.51-3.09 3.03l-.76.19V20h1c2.78 0 4.91-.77 6.31-2.29 1.89-2.05 1.7-4.68 1.69-4.71V6c0-1.1-.9-2-2-2H3c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2M15 14h2.85c-.27 1.02-1.01 2.51-3.09 3.03l-.76.19V20h1c2.78 0 4.91-.77 6.31-2.29 1.89-2.05 1.7-4.68 1.69-4.71V6c0-1.1-.9-2-2-2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2"></path>
                                </svg>
                            </p>
                        </div>
                        <div class="bas-bulle mx-auto"></div>
                    </div>
                    <div class=" d-flex flex-column align-items-center">
                        <img class="rounded-circle" style="height: 100px; width: 100px; " src="{{ asset($testimonial->img) }}" alt="no img">
                        <b class="text-center">{{ $testimonial->name }}</b>
                        <p class="text-center text-secondary">{{ $testimonial->position }}</p>
                        <div class="d-flex gap-2">
                            <a class="btn btn-primary" href="{{ route("edit_testimonials", $testimonial->id) }}">Edit</a>
                            <form action="{{ route("destroy_testimonials", $testimonial->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection