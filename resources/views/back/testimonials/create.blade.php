@extends("layouts.back")

@section("content")
    <section id="testimonials" style="width: 100vw; padding: 50px; padding-left: 300px;">
        <form class="w-100 d-flex justify-content-center" action="{{ route("store_testimonials") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column align-items-center w-50" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);padding:20px; border-radius: 10px;">
                <h1>Nouveau testimonial</h1>
                <div class="w-100 mb-3">
                    <textarea class="form-control" style="height: 150px" name="comment" id="" placeholder="Commentaire"></textarea>
                </div>
                <div class="d-flex flex-column align-items-center gap-3">
                    <input class="form-control" type="file" name="img" id="">
                    <input class="form-control" type="text" name="name" id="" placeholder="Nom Prénom">
                    <input class="form-control" type="text" name="position" id="" placeholder="Position">
                </div>
                <div class="mt-4">
                    <a class="btn btn-secondary" href="{{ route("index_testimonials") }}">Annuler</a>
                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                </div>
            </div>
        </form>
    </section>
@endsection