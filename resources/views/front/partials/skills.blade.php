<section id="skills" class="p-5" style="background-color: rgba(218, 235, 243, 1);">
    <h1>Skills</h1>
    <hr class="hr-title">
    <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed aspernatur obcaecati modi iste ullam quis fugit repudiandae nam reprehenderit quaerat repellendus eius ratione, nobis sunt nemo ipsum non nostrum molestias. Quasi, obcaecati cupiditate. Ab, architecto! Animi optio, sunt ipsum voluptate veritatis obcaecati quidem, cupiditate ipsa laborum, error nesciunt corporis ratione?</p>
    <div class="skill-bars">
        @foreach ($skills as $skill)
        <div>
            <div class="d-flex justify-content-between">
                <b>{{ $skill->skill }}</b>
                <b>{{ $skill->pourcentage }}%</b>
            </div>
            <div style="height: 10px; background-color: rgba(184, 213, 225, 1);">
                <div style="width: {{ $skill->pourcentage }}%; height: 10px; background-color: rgba(52, 136, 255, 1);">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>