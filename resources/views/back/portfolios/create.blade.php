@extends("layouts.back")

@section("content")
    <section style="padding:50px; padding-left: 300px; width: 100vw;" class="d-flex justify-content-center">
        <form style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px;" class="d-flex flex-column w-50 gap-3" action="{{ route("store_portfolios") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Création d'un nouveau projet</h1>
            <input required class="form-control" type="file" name="img" id="">
            <input required class="form-control" type="text" name="filter" id="" placeholder="Catégorie">
            <div>
                <a class="btn btn-secondary" href="{{ route("index_portfolios") }}">Annuler</a>
                <button class="btn btn-primary" type="submit">Confirmer</button>
            </div>
        </form>
    </section>
@endsection