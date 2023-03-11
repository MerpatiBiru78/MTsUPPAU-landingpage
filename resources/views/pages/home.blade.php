@extends('front')
@section('content')
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
        <div class="row py-3 px-5 bg-success  align-items-md-stretch ">

            <div class="col-md-4 ">
                <div class="h-100 p-5 bg-light text-dark shadow">
                    <h2>Tentang Kami</h2>
                    <br>
                    <p class="text-start text-wrap">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia voluptatibus amet, fuga similique
                        est quidem nisi necessitatibus, laborum animi ad maxime deserunt natus dolore inventore commodi
                        ipsa, rerum aperiam! Velit unde veritatis quis distinctio libero eos blanditiis numquam laboriosam
                        ut! Ducimus dolores facere repellendus est. Officiis, dignissimos magnam vitae molestias, ex error
                        eligendi labore eaque aliquid officia veritatis.
                    </p>
                </div>
            </div>
            <div class="col-md-8 ">
                <div class="h-100 p-5 text-dark bg-emerald shadow">
                    <img src="" alt="Foto pak presiden" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    {{-- blog --}}
    <main class="container py-3 text-bg-light">
        {{-- ekskul --}}
        <div id="carouselExampleControls" class="carousel carousel-dark slide mt-3" data-bs-ride="carousel">
            <div class="carousel-inner my-3">
                <div class="carousel-item active pe-2 ps-2">
                    <div class="card-wrapper container-sm d-flex  justify-content-around">
                        <div class="col-md-6 ">
                            <div
                                class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
                                <div class="col-md-6 p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary">Ektrakurikuler</strong>
                                    <h3 class="mb-0 " style="color:brown;"><i class="fad fa-tree"></i> Pramuka</h3>
                                    <div class="mb-1 " style="color:gold;">PAWATSMA</div>
                                    <p class="card-text text-end">Gerakan Pramuka adalah organisasi kepanduan yang berbasis
                                        pada kegiatan kepramukaan yang mengembangkan karakter dan keterampilan anggota muda.
                                    </p>
                                    <a href="#" class="stretched-link btn btn-outline-primary">Continue reading</a>
                                </div>
                                <div class="col-md-5 d-none d-lg-block">
                                    <svg class="bd-placeholder-img" width="250" height="350"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c"></rect>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div
                                class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
                                <div class="col-md-6 p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary">Ektrakurikuler</strong>
                                    <h3 class="mb-0 " style="color:blue;"><i class="fad fa-microchip"></i> IT</h3>
                                    <div class="mb-1 text-primary">CLUB IT</div>
                                    <p class="card-text text-end">Klub IT adalah komunitas yang berfokus pada pengembangan
                                        teknologi dan informasi, serta berbagi pengetahuan dan pengalaman di bidang
                                        tersebut.</p>
                                    <a href="#" class="stretched-link btn btn-outline-primary">Continue reading</a>
                                </div>
                                <div class="col-md-5 d-none d-lg-block">
                                    <svg class="bd-placeholder-img" width="250" height="350"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c"></rect>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item pe-2 ps-2">
                    <div class="card-wrapper container-sm d-flex  justify-content-between">
                        <div class="col-md-6 ">
                            <div
                                class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
                                <div class="col-md-6 p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary">Ektrakurikuler</strong>
                                    <h3 class="mb-0 text-dark"><i class="fad fa-chess"></i> Chess</h3>
                                    <div class="mb-1 text-warning">Chess Club</div>
                                    <p class="card-text text-end">Klub catur adalah kelompok penggemar catur yang berkumpul
                                        secara rutin untuk berlatih, bermain, dan memperbaiki kemampuan bermain catur
                                        mereka.
                                    </p>
                                    <a href="#" class="stretched-link btn btn-outline-primary">Continue reading</a>
                                </div>
                                <div class="col-md-5 d-none d-lg-block">
                                    <svg class="bd-placeholder-img" width="250" height="350"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c"></rect>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev btn-outline-light" type="button"
                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- content --}}
        <div class="row g-5">
            {{-- main --}}
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 border-bottom">
                    MTs Unggulan Osis Article
                </h3>
                <form class="d-flex justify-content-end py-4 " role="search">
                    <input class="form-control me-2  w-25" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fad fa-search"
                            aria-hidden="true"></i> </button>
                </form>
                <article class="blog-post">
                    <div class="card mb-3">
                        <img src="{{ 'image/banner web 1.jpg' }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Unde,
                                consectetur at explicabo magni nemo suscipit quibusdam optio maxime delectus reiciendis,
                                vero ea minima? Esse porro quidem molestiae! Molestiae delectus esse quo tempora
                                praesentium, facilis harum impedit perferendis est eos, sunt dignissimos! Laborum neque
                                velit iusto dolorem ab corporis omnis nesciunt. Aspernatur obcaecati, aperiam cum, nobis
                                dolorum facere ad velit hic eum, expedita modi architecto. Dolor facilis aliquid iste?
                                Ratione tempora accusamus expedita quod soluta quidem eos nesciunt consectetur aspernatur
                                tempore, fuga illum repudiandae magni quibusdam sapiente nihil velit distinctio, sit iure
                                dicta provident! Numquam cupiditate libero eius, itaque delectus quod.</p>
                            <div class="d-flex justify-content-between">
                                <p class="card-text text-start"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Baca Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="blog-post">
                    <div class="card mb-3">
                        <img src="{{ 'image/banner web 1.jpg' }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Unde,
                                consectetur at explicabo magni nemo suscipit quibusdam optio maxime delectus reiciendis,
                                vero ea minima? Esse porro quidem molestiae! Molestiae delectus esse quo tempora
                                praesentium, facilis harum impedit perferendis est eos, sunt dignissimos! Laborum neque
                                velit iusto dolorem ab corporis omnis nesciunt. Aspernatur obcaecati, aperiam cum, nobis
                                dolorum facere ad velit hic eum, expedita modi architecto. Dolor facilis aliquid iste?
                                Ratione tempora accusamus expedita quod soluta quidem eos nesciunt consectetur aspernatur
                                tempore, fuga illum repudiandae magni quibusdam sapiente nihil velit distinctio, sit iure
                                dicta provident! Numquam cupiditate libero eius, itaque delectus quod.</p>
                            <div class="d-flex justify-content-between">
                                <p class="card-text text-start"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Baca Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="blog-post">
                    <div class="card mb-3">
                        <img src="{{ 'image/banner web 1.jpg' }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Unde,
                                consectetur at explicabo magni nemo suscipit quibusdam optio maxime delectus reiciendis,
                                vero ea minima? Esse porro quidem molestiae! Molestiae delectus esse quo tempora
                                praesentium, facilis harum impedit perferendis est eos, sunt dignissimos! Laborum neque
                                velit iusto dolorem ab corporis omnis nesciunt. Aspernatur obcaecati, aperiam cum, nobis
                                dolorum facere ad velit hic eum, expedita modi architecto. Dolor facilis aliquid iste?
                                Ratione tempora accusamus expedita quod soluta quidem eos nesciunt consectetur aspernatur
                                tempore, fuga illum repudiandae magni quibusdam sapiente nihil velit distinctio, sit iure
                                dicta provident! Numquam cupiditate libero eius, itaque delectus quod.</p>
                            <div class="d-flex justify-content-between">
                                <p class="card-text text-start"><small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                                <a href="#" class="btn btn-outline-secondary">Baca Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </article>
                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
                </nav>

            </div>
            {{-- right-side --}}
            @include('partials.rightSideFront')
        </div>
    </main>
    {{-- footer --}}
    @include('partials.footerFront')
@endsection
