@extends("layouts.back")

@section("content")
    <section id="testimonials" style="width: 100vw; padding: 50px; padding-left: 300px;">
        <form class="w-100 d-flex justify-content-center" action="{{ route("update_testimonials", $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="d-flex flex-column align-items-center w-50" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);padding:20px; border-radius: 10px;">
                <div class="box-bulle w-100">
                    <div class="bg-light p-4 rounded-3 w-100">
                        <input class="w-100" type="text" name="comment" id="" value="{{ old("comment", $testimonial->comment) }}">
                    </div>
                <div class="bas-bulle mx-auto"></div>
                </div>
                <div class="d-flex flex-column align-items-center gap-3">
                    <img class="rounded-circle" style="height: 100px; width: 100px; object-fit: cover;" src="{{ asset($testimonial->img) }}" alt="no img">
                    <label for="">Changer l'image :</label>
                    <input class="form-control" type="file" name="img" id="">
                    <input class="form-control" type="text" name="name" id="" value="{{ old("name", $testimonial->name) }}">
                    <input class="form-control" type="text" name="position" id="" value="{{ old("position", $testimonial->position) }}">
                </div>
                <div class="mt-4">
                    <a class="btn btn-secondary" href="{{ route("index_testimonials") }}">Annuler</a>
                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                </div>
            </div>
        </form>
    </section>
@endsection