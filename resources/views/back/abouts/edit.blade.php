@extends("layouts.back")

@section("content")
<form action="{{ route("update_about") }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <section id="about" class="" style="padding: 50px; padding-left: 300px; width: 100vw;">
    <div>
        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif
        <h1>Modification de la section "About"</h1>
        <hr class="hr-title">
    </div>
    <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px; padding: 20px;">
        <p style="margin: 0;"><input class="form-control mb-3"  type="text" name="subtitle" id="" value="{{ old("subtitle", $about->subtitle) }}"></p>
        <div class="d-flex gap-3">
            <div style="width: 500px;" class="d-flex flex-column gap-3">
                <img style="width: 100%; aspect-ratio: 1 / 1;" src="{{ asset($about->avatar->image) }}" alt="">
                <input class="form-control"  type="file" name="image" id="">
            </div>
            <div class=" w-100">
                <div class="d-flex gap-5">
                    <div>
                        <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Birthday :</b><input class="form-control"  type="text" name="birthdate" id="" value="{{ old("birthdate", $about->birthdate) }}"></p>
                        <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Website :</b><input class="form-control"  type="text" name="website" id="" value="{{ old("website", $about->website) }}"></p>
                        <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Phone :</b><input class="form-control"  type="text" name="phone" id="" value="{{ old("phone", $about->phone) }}"></p>
                        <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>City :</b><input class="form-control"  type="text" name="city" id="" value="{{ old("city", $about->city) }}"></p>
                    </div>
                    <div>
                        <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Age :</b><input class="form-control" type="text" name="age" id="" value="{{ old("age", $about->age) }}"></p>
                        <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Degree :</b><input class="form-control"  type="text" name="degree" id="" value="{{ old("degree", $about->degree) }}"></p>
                        <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Email :</b><input class="form-control"  type="text" name="email" id="" value="{{ old("email", $about->email) }}"></p>
                        <p><span class="text-primary" style="font-weight: bold; font-size: 20px;">{{ '>' }}</span> <b>Freelance :</b><input class="form-control"  type="text" name="freelance" id="" value="{{ old("freelance", $about->freelance) }}"></p>
                    </div>
                </div>
                <p><input class="form-control"  type="text" name="subtext" id="" value="{{ old("subtext", $about->subtext) }}"></p>
                <button class="btn btn-primary" type="submit">Sauvegarder les changements</button>
            </div>
        </div>
    </div>
</section>
</form>
@endsection