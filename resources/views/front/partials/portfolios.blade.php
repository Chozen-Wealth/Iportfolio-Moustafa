<section class="p-5" id="portfolios" style="background-color: rgba(218, 235, 243, 1);">
    <h1>Portfolios</h1>
    <hr class="hr-title">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et rerum in, ipsum illum delectus laudantium veniam pariatur expedita quasi atque, non vero, libero corrupti nesciunt architecto ratione facilis optio eveniet autem. Ipsam, laboriosam adipisci commodi fugit expedita veritatis sit. Amet.</p>
    <div class="d-flex justify-content-center">
        <div class="d-flex gap-2 filter-bar">
            <span class="text-primary">ALL</span>
            @foreach ($portfolios as $portfolio)
                <span>{{ strtoupper($portfolio->filter) }}</span>
            @endforeach
        </div>
    </div>
    <div class="grille-portfolio mt-3">
        @foreach ($portfolios as $portfolio)
            <img style="object-fit: cover; width: 100%" src="{{ $portfolio->img }}" alt="Problème d'image">
        @endforeach
    </div>
</section>