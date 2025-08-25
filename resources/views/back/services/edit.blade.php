@extends("layouts.back")

@section("content")
    <section style="padding:50px; padding-left: 300px; width: 100vw;" class="d-flex justify-content-center">
        <form style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px;" class="d-flex flex-column w-50 gap-3" action="{{ route("update_services", $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <h1>Ajout d'un service</h1>
            <div class="d-flex gap-5">
                <div class="d-flex align-items-center gap-1">
                    <label for="code">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                        fill="#000000" viewBox="0 0 24 24" >
                        <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                        <path d="M9.71 16.29 5.41 12l4.3-4.29-1.42-1.42L2.59 12l5.7 5.71zM15.71 17.71l5.7-5.71-5.7-5.71-1.42 1.42 4.3 4.29-4.3 4.29z"></path>
                        </svg>
                        Code
                    </label>
                    <input type="radio" name="icon" id="code" value="{{ $code }}" {{ old('icon', $service->icon) == $code ? 'checked' : '' }}>
                </div>
                <div class="d-flex align-items-center gap-1">
                    <label for="design">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                        fill="#000000" viewBox="0 0 24 24" >
                        <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                        <path d="m10.97,20.39c1.2-1.2,1.8-3.1,1.52-4.84-.24-1.5-1.11-2.7-2.44-3.36-1.27-.64-2.99-.54-4.26.25-1.17.72-1.81,1.89-1.81,3.29,0,.3.02.59.04.86.08,1.03.11,1.42-1.47,2.21-.32.16-.53.47-.55.82s.14.69.43.89c1,.69,2.76,1.49,4.62,1.49,1.35,0,2.74-.42,3.92-1.6Z"></path><path d="m16.67,2.91l-7.88,7.88c.61.07,1.19.23,1.71.49,1.51.76,2.52,2.08,2.89,3.73l7.69-7.69c1.22-1.22,1.22-3.2,0-4.41s-3.2-1.22-4.41,0Z"></path>
                        </svg>
                        Design
                    </label>
                    <input type="radio" name="icon" id="design" value="{{ $design }}" {{ old('icon', $service->icon) == $design ? 'checked' : '' }}>
                </div>
                <div class="d-flex align-items-center gap-1">
                    <label for="card">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                        fill="#000000" viewBox="0 0 24 24" >
                        <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                        <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2M9 8c1.15 0 2 .85 2 2s-.85 2-2 2-2-.85-2-2 .85-2 2-2m-3 8c0-1.66 1.34-3 3-3s3 1.34 3 3zm12-1h-4v-2h4zm0-4h-5V9h5z"></path>
                        </svg>
                        Card
                    </label>
                    <input type="radio" name="icon" id="card" value="{{ $card }}" {{ old('icon', $service->icon) == $card ? 'checked' : '' }}>
                </div>
                <div class="d-flex align-items-center gap-1">
                    <label for="website">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"  
                        fill="#000000" viewBox="0 0 24 24" >
                        <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                        <path d="m20,3H4c-1.1,0-2,.9-2,2v14c0,1.1.9,2,2,2h16c1.1,0,2-.9,2-2V5c0-1.1-.9-2-2-2ZM5,7c0-.55.45-1,1-1s1,.45,1,1-.45,1-1,1-1-.45-1-1Zm4,1c-.55,0-1-.45-1-1s.45-1,1-1,1,.45,1,1-.45,1-1,1Zm-5,11v-9h16v9s-16,0-16,0Z"></path>
                        </svg>
                        Site web
                    </label>
                    <input type="radio" name="icon" id="website" value="{{ $website }}" {{ old('icon', $service->icon) == $website ? 'checked' : '' }}>
                </div>
            </div>
            <input class="form-control" type="text" name="title" id="" placeholder="Titre" value="{{ old("title", $service->title) }}">
            <input class="form-control" type="text" name="text" id="" placeholder="Texte" value="{{ old("text", $service->text) }}">
            <div>
                <button class="btn btn-secondary" type="submit">Annuler</button>
                <button class="btn btn-primary" type="submit">Confirmer</button>
            </div>
        </form>
    </section>
@endsection