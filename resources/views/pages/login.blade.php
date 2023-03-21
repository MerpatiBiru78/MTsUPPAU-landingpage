@extends('back')
@section('content')

    <main class="d-flex justify-content-center p-4">
        @if ($errors->any())
            <div class="alert alert-danger shine w-25 m-lg-5 position-absolute"
                style="display:flex;
            z-index: 99999;">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                @endif
                <span class="btn btn-danger close-btn">&times;</span>
            </div>
            <script>
                const close = document.querySelector(".close-btn"),
                    alert = document.querySelector(".alert")
                close.addEventListener("click", () => {
                    alert.style.display = "none";
                });
            </script>
        @endif
        <section class="wrapper shine">
            <div class="form signup text-light">
                <header>Masuk</header>
                {{-- {{ route('login_action') }} --}}
                <form action="{{ route('login_action') }}" method="POST" id="login">
                    @csrf
                    <input type="email" class="form-control" placeholder="Email address" name="email" required />
                    <input type="password" class="form-control passLog" name="password" placeholder="Confirm Password" required />
                    <div class="checkbox">
                        <input type="checkbox" id="signupCheckLog" />
                        <label for="signupCheck"> Show password</label>
                    </div>
                    {{-- <input type="submit" class="btn bg-emerald btn-success" value="Masuk" /> --}}
                    <button type="submit" class="btn bg-emerald btn-success"><i class="fad fa-right-to-bracket"></i> Masuk </button>
                </form>

            </div>

            <div class="form login shine">
                <header>Daftar</header>
                <form action="{{ route('regis_action') }}" method="POST">
                    @csrf
                    <input type="number" class="form-control" name="nik" placeholder="NIK" required />
                    <input type="text" class="form-control" name="nama" placeholder="Nama" required />
                    <input type="email" class="form-control" name="email" placeholder="Email" required />
                    <input type="password" class="form-control pass" name="pass1" placeholder="Password" required />
                    <input type="password" class="form-control pass2" name="pass2" placeholder="Confirm Password"
                        required />
                    <div class="checkbox">
                        <input type="checkbox" id="signupCheck" />
                        <label for="signupCheck text-"> Show password</label>
                    </div>
                    {{-- <input type="submit" class="mb-5 btn bg-lg btn-success" value="Daftar" /> --}}
                    <button class="form-control mb-5 btn bg-lg btn-success"><i class="fad fa-right-to-bracket"></i> Daftar</button>
                </form>
            </div>


            <script>
                const wrapper = document.querySelector(".wrapper"),
                    signupHeader = document.querySelector(".signup header"),
                    loginHeader = document.querySelector(".login header"),
                    showEye = document.querySelector("#signupCheck"),
                    showEyeLog = document.querySelector("#signupCheckLog"),
                    eye = document.querySelector("#eye"),
                    passLog = document.querySelector(".passLog"),
                    pass = document.querySelector(".pass"),
                    pass2 = document.querySelector(".pass2"),
                    login = document.querySelector("#login")



                loginHeader.addEventListener("click", () => {
                    wrapper.classList.add("active");
                    wrapper.style.paddingBottom = '280px';
                    login.style.filter = "blur(5px)";

                });
                signupHeader.addEventListener("click", () => {
                    wrapper.classList.remove("active");
                    wrapper.style.paddingBottom = '180px';
                    login.style.filter = "blur(0px)";
                });

                showEye.addEventListener("change", () => {
                    if (pass.type === "password") {
                        pass.type = "text";
                        pass2.type = "text";
                    } else {
                        pass.type = "password"
                        pass2.type = "password"
                    }
                })
                showEyeLog.addEventListener("change", () => {
                    if (passLog.type === "password") {
                        passLog.type = "text";
                    } else {
                        passLog.type = "password";
                    }
                })
            </script>
            <script src="{{ asset('js/login.js') }}"></script>
        </section>
    </main>
@endsection
