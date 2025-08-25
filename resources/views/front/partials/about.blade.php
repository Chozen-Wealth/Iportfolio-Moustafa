<section id="about" class="p-5">
    <div>
        <h1>About</h1>
        <hr class="hr-title">
        <p>{{ $about->subtitle }}</p>
    </div>
    <div class="d-flex gap-3">
        <div style="width: 500px;">
            <img style="width: 100%; aspect-ratio: 1 / 1;" src="{{ $about->avatar->image }}" alt="">
        </div>
        <div>
            <h1>UI/UX Designer & Web Developer.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda, voluptatibus qui sunt laborum cum quos provident asperiores enim nam id dolorem similique, quaerat delectus iste, hic consequatur eaque ad.</p>
            <div class="d-flex gap-5">
                <div>
                    <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Birthday :</b> {{ $about->birthdate }}</p>
                    <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Website :</b> {{ $about->website }}</p>
                    <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Phone :</b> {{ $about->phone }}</p>
                    <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>City :</b> {{ $about->city }}</p>
                </div>
                <div>
                    <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Age :</b> {{ $about->age }}</p>
                    <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Degree :</b> {{ $about->degree }}</p>
                    <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Email :</b> {{ $about->email }}</p>
                    <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Freelance :</b> {{ $about->freelance }}</p>
                </div>
            </div>
            <p>{{ $about->subtext }}</p>
        </div>
    </div>
</section>