@extends('front')
@section('content')
    {{-- blog --}}
    <main class="container p-3 text-bg-light ">
        <form class="d-flex justify-content-end py-4 border-bottom mb-2 " role="search">
            <input class="form-control me-2  w-25" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="fad fa-search" aria-hidden="true"></i>
            </button>
        </form>
        <div class="row row-cols-sm-2 row-cols-md-3 g-2 justify-content-center">
            {{-- data card guru --}}
            <div class="bg-secondary shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Chusnul Chotimah, S.T</h3>
                        <p> PRAKARYA - VII </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-chalkboard-user"></i> Profil</a>
                    </div>
                </div>
            </div>
            {{-- data card guru --}}
            {{-- data card guru --}}
            <div class="bg-secondary shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Chusnul Chotimah, S.T</h3>
                        <p> PRAKARYA - VII </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-chalkboard-user"></i> Profil</a>
                    </div>
                </div>
            </div>
            {{-- data card guru --}}
            {{-- data card guru --}}
            <div class="bg-secondary shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Chusnul Chotimah, S.T</h3>
                        <p> PRAKARYA - VII </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-chalkboard-user"></i> Profil</a>
                    </div>
                </div>
            </div>
            {{-- data card guru --}}
            {{-- data card guru --}}
            <div class="bg-secondary shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Chusnul Chotimah, S.T</h3>
                        <p> PRAKARYA - VII </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-chalkboard-user"></i> Profil</a>
                    </div>
                </div>
            </div>
            {{-- data card guru --}}
            {{-- data card guru --}}
            <div class="bg-secondary shine col shadow p-3 w-25 m-2 text-light rounded-4">
                <div class="text-center">
                    <figure class="media">
                        <img src="{{ asset('image/profil/1.jpg') }}" alt="Chusnul Chotimah, S.T"
                            class="img-fluid rounded-circle w-25 h-25 ">
                    </figure>
                    <div class="text">
                        <h3 class="text-uppercase">Chusnul Chotimah, S.T</h3>
                        <p> PRAKARYA - VII </p>
                        <a href="#" class="btn btn-outline-light"><i class="fad fa-chalkboard-user"></i> Profil</a>
                    </div>
                </div>
            </div>
            {{-- data card guru --}}
            






        </div>
    </main>
    {{-- footer --}}
    @include('partials.footerFront')
@endsection
