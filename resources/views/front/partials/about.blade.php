<section id="about">
    <div>
        <h1>About</h1>
        <hr>
        <p>{{ $about->subtitle }}</p>
    </div>
    <div>
        <div>
            <img src="" alt="">
        </div>
        <div>
            <h1>UI/UX Designer & Web Developer.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda, voluptatibus qui sunt laborum cum quos provident asperiores enim nam id dolorem similique, quaerat delectus iste, hic consequatur eaque ad.</p>
            <div class="d-flex">
                <div>
                    <p><span class="text-primary">{{ '>' }}</span><b>Birthday :</b> {{ $about->birthdate }}</p>
                    <p><span class="text-primary">{{ '>' }}</span><b>Website :</b> {{ $about->website }}</p>
                    <p><span class="text-primary">{{ '>' }}</span><b>Phone :</b> {{ $about->phone }}</p>
                    <p><span class="text-primary">{{ '>' }}</span><b>City :</b> {{ $about->city }}</p>
                </div>
                <div>
                    <p><span class="text-primary">{{ '>' }}</span><b>Age :</b> {{ $about->age }}</p>
                    <p><span class="text-primary">{{ '>' }}</span><b>Degree :</b> {{ $about->degree }}</p>
                    <p><span class="text-primary">{{ '>' }}</span><b>Email :</b> {{ $about->email }}</p>
                    <p><span class="text-primary">{{ '>' }}</span><b>Freelance :</b> {{ $about->freelance }}</p>
                </div>
            </div>
            <p>{{ $about->subtext }}</p>
        </div>
    </div>
    </section>