@extends("layouts.back")

@section("content")
    <section id="services" style="padding: 50px;padding-left: 300px;">
        <h1>Modifications de la section "Services"</h1>
        <hr class="hr-title">
        <div class="grille-services">
            @foreach ($services as $service)
                <div class="d-flex gap-2">
                    <div class="bg-primary rounded-circle d-flex justify-content-center align-items-center" style="height: 40px; min-width: 40px">
                        {!! $service->icon !!}
                    </div>
                    <div>
                        <b>{{ $service->title }}</b>
                        <p>{{ $service->text }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection