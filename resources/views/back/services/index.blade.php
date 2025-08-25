@extends("layouts.back")

@section("content")
    <section id="services" style="padding: 50px;padding-left: 300px;">
        <h1>Modifications de la section "Services"</h1>
        <hr class="hr-title">
        <div class="mb-3">
            <a class="btn btn-primary" href="{{ route("create_services") }}">+ Ajouter un service</a>
        </div>
        <div class="grille-services">
            @foreach ($services as $service)
                <div class="d-flex gap-2" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2)">
                    <div class="bg-primary rounded-circle d-flex justify-content-center align-items-center" style="height: 40px; min-width: 40px">
                        {!! $service->icon !!}
                    </div>
                    <div>
                        <b>{{ $service->title }}</b>
                        <p>{{ $service->text }}</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <a class="btn btn-primary" href="{{ route("edit_services", $service->id) }}">Edit</a>
                        <form action="{{ route("destroy_services", $service->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection