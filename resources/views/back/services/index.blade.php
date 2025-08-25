@extends("layouts.back")

@section("content")
    <section id="services" style="">
        <h1>Services</h1>
        <hr class="hr-title">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae aliquam assumenda at voluptate debitis officiis quam accusamus quia alias ab distinctio iure qui hic saepe nostrum sit totam velit, quae eos veritatis. Totam laudantium cupiditate nulla iusto incidunt blanditiis asperiores.</p>
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