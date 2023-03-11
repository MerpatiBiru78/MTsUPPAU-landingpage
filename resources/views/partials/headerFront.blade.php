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
                            href="{{ route('home') }}"><i class="fad fa-home"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() === 'tentangKami' ? 'active' : '' }} "
                            href="{{ route('TentangKami') }}"><i class="fad fa-users"></i> Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() === 'galeri' ? 'active' : '' }}"
                            href="{{ route('galeri') }}"><i class="fad fa-images"></i> Galeri</a>
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
