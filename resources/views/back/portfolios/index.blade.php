@extends("layouts.back")

@section("content")
    <section id="portfolios" style="background-color: rgb(193, 211, 243);padding:50px; padding-left: 300px; min-height: 100vh;">
        <h1>Modification de la section "Portfolio"</h1>
        <hr class="hr-title">
        <div class="d-flex justify-content-between">
            <div class="d-flex gap-2 filter-bar">
                <span class="text-primary">ALL</span>
                @foreach ($portfolios->pluck('filter')->unique() as $portfolio)
                    <span>{{ strtoupper($portfolio) }}</span>
                @endforeach
            </div>
            <a class="btn btn-primary" href="{{ route("create_portfolios") }}">+ Ajouter</a>
        </div>
        <div class="grille-portfolio mt-4">
            @foreach ($portfolios as $portfolio)
                <div style="position: relative">
                    <div class="box-portfolio">
                        <a href="{{ route("edit_portfolios", $portfolio->id) }}" class="btn-edit-portfolio">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                            fill="currentColor" viewBox="0 0 24 24" >
                            <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                            <path d="M5 21h14c1.1 0 2-.9 2-2v-7h-2v7H5V5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2"></path><path d="M7 13v3c0 .55.45 1 1 1h3c.27 0 .52-.11.71-.29l9-9a.996.996 0 0 0 0-1.41l-3-3a.996.996 0 0 0-1.41 0l-9.01 8.99A1 1 0 0 0 7 13m10-7.59L18.59 7 17.5 8.09 15.91 6.5zm-8 8 5.5-5.5 1.59 1.59-5.5 5.5H9z"></path>
                            </svg>
                        </a>
                        <form action="{{ route("destroy_portfolios", $portfolio->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn-delete-portfolio">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                fill="currentColor" viewBox="0 0 24 24" >
                                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                <path d="M17 6V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v2H2v2h2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8h2V6zM9 4h6v2H9zM6 20V8h12v12z"></path><path d="M9 10h2v8H9zM13 10h2v8h-2z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <img style="object-fit: cover; width: 100%" src="{{ asset($portfolio->img) }}" alt="Problème d'image">
                </div>
            @endforeach
        </div>
    </section>
@endsection