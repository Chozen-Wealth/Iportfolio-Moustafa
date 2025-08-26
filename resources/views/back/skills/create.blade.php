@extends("layouts.back")

@section("content")
    <section style="padding:50px; padding-left: 300px; width: 100vw;" class="d-flex justify-content-center">
        <form style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px;" class="d-flex flex-column w-50 gap-3" action="{{ route("store_skills") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Ajout d'un nouveau service</h1>
            <input required class="form-control" type="text" name="skill" id="" placeholder="Nom du skill">
            <div class="d-flex gap-5">
                <input style="width:80%" type="range" name="" value="50" min="0" max="100" id="rangeInput" for="pourcentage">
                <input style="width:20%" class="form-control" type="number" value="50" min="0" mmax="100" name="pourcentage" id="numberInput" placeholder="Pourcentage">
            </div>
            <div>
                <a class="btn btn-secondary" href="{{ route("index_skills") }}">Annuler</a>
                <button class="btn btn-primary" type="submit">Confirmer</button>
            </div>
        </form>
    </section>

    
    <script>
        const range = document.getElementById("rangeInput");
        const number = document.getElementById("numberInput");
    
        range.addEventListener("input", () => {
            number.value = range.value;
        });
    
        number.addEventListener("input", () => {
            range.value = number.value;
        });
    </script>
@endsection