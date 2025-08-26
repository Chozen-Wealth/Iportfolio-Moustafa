@extends("layouts.back")

@section("content")
    <section id="skills" style="padding: 50px;padding-left: 300px;width: 100vw;">
        <h1>Skills</h1>
        <hr class="hr-title">
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route("create_skills") }}">+ Ajouter</a>
        </div>
        <div class="skill-bars mt-3">
            @foreach ($skills as $skill)
            <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px; padding: 10px;">
                <div>
                    <div class="d-flex justify-content-between">
                        <b>{{ $skill->skill }}</b>
                        <b>{{ $skill->pourcentage }}%</b>
                    </div>
                    <div style="height: 10px; background-color: rgb(146, 166, 201);">
                        <div style="width: {{ $skill->pourcentage }}%; height: 10px; background-color: rgba(52, 136, 255, 1);">
                        </div>
                    </div>
                </div>
                <div class="mt-1 d-flex gap-1">
                    <a class="btn btn-primary" href="{{ route("edit_skills", $skill->id) }}">Edit</a>
                    <form action="{{ route("destroy_skills", $skill->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection