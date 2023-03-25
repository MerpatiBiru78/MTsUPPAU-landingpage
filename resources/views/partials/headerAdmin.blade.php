<header class="navbar g-sm-5  sticky-top bg-lg position-relative flex-md-nowrap justify-content-center p-2 shadow ">
    <a class="navbar-brand d-inline-flex  col-md-3 col-lg-2 ms-2 me-0 p-1 fs-6 align-self-center" href="#">
       <img src="{{ asset('image/profil/Dp.png') }}" class="rounded-circle float-start me-2" width="35px" height="35px" style="object-fit: cover;
  object-position: center;">
    <?php
        $pos = strpos(Auth::user()['name'],' ',1);
        if($pos>0){
            $diplayname = Str::substr(Auth::user()['name'], 0, $pos);
        }else{
            $displayname = Auth::user()['name'];
        }
    ?>
        <h6 class="pt-1 text-light">{{ $displayname }}</h6>
    </a>
    <button class="navbar-toggler text-light bg-success position-absolute d-md-none collapsed mt-2  " type="button"
        data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="fad fa-bars"></span>
    </button>
    <form action="" method="post" class="w-100 d-flex justify-content-end ">
        @csrf
        <input class="form-control form-control-dark rounded-5 border-0" type="text" placeholder="Search"
            aria-label="Search" />
        <button
            class=" btn btn-success bg-gradient rounded-circle m-1 align-self-center w-auto py-2 position-absolute"><span
                class="fad fa-search"></span></button>
    </form>
    <div class="navbar-nav m-1 ">
        <div class="nav-item text-nowrap ">
            <a class=" px-3 btn btn-danger bg-gradient text-light rounded-pill" href="{{ route('logout') }}"><i
                    class="fad fa-arrow-right-from-bracket"></i> Keluar</a>
        </div>
    </div>
</header>
