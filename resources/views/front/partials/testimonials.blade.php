<section class="p-5" id="portfolios" style="background-color: rgba(218, 235, 243, 1);">
    <h1>Ils m'ont fait confiance</h1>
    <hr class="hr-title">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto unde repellendus quia vitae minus a magnam molestiae distinctio eius! Impedit.</p>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="bouton-carousel active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bouton-carousel" aria-label="Slide 2"></button>
            <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block w-100">
                    <div class="d-flex gap-5 p-5">
                        @for ($i = 0; $i <= 1; $i++)
                            <div class="d-flex flex-column align-items-center ">
                                <div class="box-bulle">
                                    <div class="bg-light p-4">
                                        <p class="text-center">
                                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                                            fill="rgb(184, 213, 225)" viewBox="0 0 24 24" >
                                            <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                            <path d="m21.01,10h-2.85c.27-1.02,1.01-2.51,3.09-3.03l.76-.19v-2.78h-1c-2.78,0-4.91.77-6.31,2.29-1.89,2.05-1.7,4.68-1.69,4.71v7c0,1.1.9,2,2,2h6c1.1,0,2-.9,2-2v-6c0-1.1-.9-2-2-2Z"></path><path d="m9.01,10h-2.85c.27-1.02,1.01-2.51,3.09-3.03l.76-.19v-2.78h-1c-2.78,0-4.91.77-6.31,2.29-1.89,2.05-1.7,4.68-1.69,4.71v7c0,1.1.9,2,2,2h6c1.1,0,2-.9,2-2v-6c0-1.1-.9-2-2-2Z"></path>
                                            </svg>
                                        {{ $testimonials[$i]->comment }}
                                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                                            fill="rgb(184, 213, 225)" viewBox="0 0 24 24" >
                                            <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                            <path d="M3 14h2.85c-.27 1.02-1.01 2.51-3.09 3.03l-.76.19V20h1c2.78 0 4.91-.77 6.31-2.29 1.89-2.05 1.7-4.68 1.69-4.71V6c0-1.1-.9-2-2-2H3c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2M15 14h2.85c-.27 1.02-1.01 2.51-3.09 3.03l-.76.19V20h1c2.78 0 4.91-.77 6.31-2.29 1.89-2.05 1.7-4.68 1.69-4.71V6c0-1.1-.9-2-2-2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2"></path>
                                            </svg>
                                        </p>
                                    </div>
                                    <div class="bas-bulle mx-auto"></div>
                                </div>
                                <div class=" d-flex flex-column align-items-center">
                                    <img class="rounded-circle" style="height: 100px; width: 100px; " src="{{ $testimonials[$i]->img }}" alt="no img">
                                    <b class="text-center">{{ $testimonials[$i]->name }}</b>
                                    <p class="text-center text-secondary">{{ $testimonials[$i]->position }}</p>
                                </div>

                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block w-100">
                    <div class="d-flex gap-5 p-5">
                        @for ($i = 2; $i <= 3; $i++)
                            <div class="d-flex flex-column align-items-center ">
                                <div class="box-bulle">
                                    <div class="bg-light p-4">
                                        <p class="text-center">
                                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                                            fill="rgb(184, 213, 225)" viewBox="0 0 24 24" >
                                            <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                            <path d="m21.01,10h-2.85c.27-1.02,1.01-2.51,3.09-3.03l.76-.19v-2.78h-1c-2.78,0-4.91.77-6.31,2.29-1.89,2.05-1.7,4.68-1.69,4.71v7c0,1.1.9,2,2,2h6c1.1,0,2-.9,2-2v-6c0-1.1-.9-2-2-2Z"></path><path d="m9.01,10h-2.85c.27-1.02,1.01-2.51,3.09-3.03l.76-.19v-2.78h-1c-2.78,0-4.91.77-6.31,2.29-1.89,2.05-1.7,4.68-1.69,4.71v7c0,1.1.9,2,2,2h6c1.1,0,2-.9,2-2v-6c0-1.1-.9-2-2-2Z"></path>
                                            </svg>
                                        {{ $testimonials[$i]->comment }}
                                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                                            fill="rgb(184, 213, 225)" viewBox="0 0 24 24" >
                                            <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                                            <path d="M3 14h2.85c-.27 1.02-1.01 2.51-3.09 3.03l-.76.19V20h1c2.78 0 4.91-.77 6.31-2.29 1.89-2.05 1.7-4.68 1.69-4.71V6c0-1.1-.9-2-2-2H3c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2M15 14h2.85c-.27 1.02-1.01 2.51-3.09 3.03l-.76.19V20h1c2.78 0 4.91-.77 6.31-2.29 1.89-2.05 1.7-4.68 1.69-4.71V6c0-1.1-.9-2-2-2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2"></path>
                                            </svg>
                                        </p>
                                    </div>
                                    <div class="bas-bulle mx-auto"></div>
                                </div>
                                <div class=" d-flex flex-column align-items-center">
                                    <img class="rounded-circle" style="height: 100px; width: 100px; " src="{{ $testimonials[$i]->img }}" alt="no img">
                                    <b class="text-center">{{ $testimonials[$i]->name }}</b>
                                    <p class="text-center text-secondary">{{ $testimonials[$i]->position }}</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>