<header
    class="navbar navbar-dark sticky-top bg-lg position-relative flex-md-nowrap justify-content-center p-2 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 p-3 fs-6 " href="#"><span class="fad fa-user"></span> "nama User"</a>
    <button class="navbar-toggler text-light bg-success position-absolute d-md-none collapsed m-3  " type="button"
        data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="fad fa-bars"></span>
    </button>
    <form action="" method="post" class="w-100 d-flex justify-content-end ">
        @csrf
        <input class="form-control form-control-dark rounded-5 border-0" type="text" placeholder="Search"
            aria-label="Search" />
        <button class=" btn btn-success bg-gradient rounded-circle m-1 align-self-center w-auto py-2 position-absolute" ><span class="fad fa-search"></span></button>
    </form>
    <div class="navbar-nav m-1 ">
        <div class="nav-item text-nowrap ">
            <a class=" px-3 btn btn-danger bg-gradient text-light rounded-pill" href="#"><i class="fad fa-arrow-right-from-bracket"></i> Keluar</a>
        </div>
    </div>
</header>
