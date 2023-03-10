@extends('app')
@section('content')
    <header class="mx-4 my-2 d-inline-flex ">
        <a href="#" class="navbar-brand d-flex gap-1">
            <img src="{{ 'image/LOGO MTSU.png' }}" alt="MTs Unggulan PP Amanatul Ummah" height="40">
            <h5 class="text-light">MTs Unggulan<br>PP Amanatul Ummah</h5>
        </a>
    </header>
    <nav class="mx-4 py-2 navbar navbar-expand-lg bg-body-tertiary rounded shadow color-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-links">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() === '/' ? 'active' : '' }}" aria-current="page"
                            href="#"><i class="fad fa-home"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fad fa-users"></i> Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fad fa-images"></i> Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "><i class="fad fa-medal"></i> Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "><i class="fad fa-chalkboard-user"></i> Pengajar</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fad fa-landmark"></i> Program Unggulan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fad fa-medal"></i> Kelas
                                    <strong>UNGGULAN</strong></a></li>
                            <li><a class="dropdown-item" href="#"><i class="fad fa-gauge-max"></i> Kelas SKS 2
                                    Tahun</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fad fa-gauge-high"></i> Kelas SKS 3
                                    Tahun</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ 'image/banner web 1.jpg' }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ 'image/banner web 2.jpg' }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container bg-light ">
        <div class="row py-3 px-5 bg-success bg-gradient align-items-md-stretch ">
            <div class="col-md-4 "> 
                <div class="h-100 p-5 bg-light text-dark shadow">
                    <h2>Tentang Kami</h2>
                    <br>
                    <p class="text-start text-wrap" >
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius placeat quas laborum id, at porro
                        quasi odio vitae aut ad architecto? Consectetur, atque in molestias sint porro perferendis ab at
                        quam sequi! Ex laboriosam mollitia, ipsa veritatis quasi eos debitis quam fuga et explicabo eius
                        deleniti doloremque sequi, eligendi consectetur temporibus repudiandae impedit, nihil consequatur
                        facilis placeat. Iusto earum repellendus itaque error odio. Illo est pariatur atque ex possimus.
                        Aspernatur modi sed culpa deleniti illum totam, obcaecati sapiente! Recusandae a maxime, quidem
                        dignissimos deserunt at voluptatem veniam voluptates iste amet animi harum eius consectetur earum!
                    </p>
                </div>
            </div>
            <div class="col-md-8 ">
                <div class="h-100 p-5 text-dark bg-emerald shadow">
                    <img src="" alt="Foto pak presiden" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row pt-3 align-items-md-stretch justify-content-between">
            <div class="col-md-6">
                <div class="h-100 p-5 bg-lg text-dark rounded-3">
                    <h2>VISI</h2>
                    <p>Terwujudnya manusia yang <strong> Unggul, Utuh, dan Berakhlakul Karimah </strong> untuk
                        kemuliaan dan kejayaan Islam dan kaum Muslimin, kemulian dan kejayaan seluruh bangsa Indonesia dan
                        untuk keberhasilan cita-cita
                        kemerdekaan yaitu terwujudnya kesejahteraan dan tegaknya keadilan bagi sulurh Bangsa Indonesia tanpa
                        terkecuali
                    </p>
                    {{-- <button class="btn btn-outline-light" type="button">Example button</button> --}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>MISI</h2>
                    <p></p>
                    {{-- <button class="btn btn-outline-secondary" type="button">Example button</button> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
