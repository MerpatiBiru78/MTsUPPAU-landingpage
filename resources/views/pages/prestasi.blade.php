@extends('front')
@section('content')
    {{-- blog --}}
    <main class="container py-3 text-bg-light">
        {{-- content --}}
        <form class="d-flex justify-content-end py-4 border-bottom mb-2 " role="search">
            <input class="form-control me-2  w-25" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="fad fa-search" aria-hidden="true"></i>
            </button>
        </form>
        <div class="row row-cols-sm-2 row-cols-md-3 g-2 justify-content-center">
            {{-- {{ $juara == 1 ? 'bg-warning' : '' }} --}}
            {{-- juara 1 bg-warning --}}
            {{-- juara 2 bg-secondary --}}
            {{-- juara 3 bg-light --}}
            {{-- juara >3 bg-dark --}}
            {{-- card prestasi --}}
            <div class="bg-light text-dark shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Juara 3 : ISC </h3>
                        <p> nama lomba </p>
                        <a href="#" class="btn btn-outline-dark"><i class="fad fa-medal"></i> Liputan</a>
                    </div>
                </div>
            </div>
             {{-- card prestasi --}}
            {{-- card prestasi --}}
            <div class="bg-warning shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Juara 1 : ISC </h3>
                        <p> nama lomba </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-medal"></i> Liputan</a>
                    </div>
                </div>
            </div>
             {{-- card prestasi --}}
            {{-- card prestasi --}}
            <div class="bg-secondary shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Juara 2 : ISC </h3>
                        <p> nama lomba </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-medal"></i> Liputan</a>
                    </div>
                </div>
            </div>
             {{-- card prestasi --}}
            {{-- card prestasi --}}
            <div class="bg-dark shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Juara 4 : ISC </h3>
                        <p> nama lomba </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-medal"></i> Liputan</a>
                    </div>
                </div>
            </div>
             {{-- card prestasi --}}
            {{-- card prestasi --}}
            <div class="bg-dark shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Juara 3 : ISC </h3>
                        <p> nama lomba </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-medal"></i> Liputan</a>
                    </div>
                </div>
            </div>
             {{-- card prestasi --}}
            {{-- card prestasi --}}
            <div class="bg-dark shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Juara 3 : ISC </h3>
                        <p> nama lomba </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-medal"></i> Liputan</a>
                    </div>
                </div>
            </div>
             {{-- card prestasi --}}
            {{-- card prestasi --}}
            <div class="bg-dark shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Juara 3 : ISC </h3>
                        <p> nama lomba </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-medal"></i> Liputan</a>
                    </div>
                </div>
            </div>
             {{-- card prestasi --}}
            {{-- card prestasi --}}
            <div class="bg-dark shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Juara 3 : ISC </h3>
                        <p> nama lomba </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-medal"></i> Liputan</a>
                    </div>
                </div>
            </div>
             {{-- card prestasi --}}
            






        </div>
    </main>
    {{-- footer --}}
    @include('partials.footerFront')
@endsection
