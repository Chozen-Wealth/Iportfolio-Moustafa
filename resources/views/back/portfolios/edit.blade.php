@extends("layouts.back")

@section("content")
    <section style="padding:50px; padding-left: 300px; width: 100vw;" class="d-flex justify-content-center">
        <form style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px;" class="d-flex flex-column w-50 gap-3" action="{{ route("update_portfolios", $portfolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <h1>Modification du projet</h1>
            <img width="400px" src="{{ asset($portfolio->img) }}" alt="">
            <div>
                <label for="">Changer l'image :</label>
                <input class="form-control" type="file" name="img" id="">
            </div>
            <input class="form-control" type="text" name="filter" id="" placeholder="Catégorie" value="{{ old("filter", $portfolio->filter) }}">
            <div>
                <button class="btn btn-secondary" type="submit">Annuler</button>
                <button class="btn btn-primary" type="submit">Confirmer</button>
            </div>
        </form>
    </section>
@endsection