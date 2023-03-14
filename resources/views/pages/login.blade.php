@extends('back')
@section('login')
    <main class="d-flex justify-content-center p-4">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <section class="wrapper shine">
            <div class="form signup text-light">
                <header>Masuk</header>
                <form action="#" id="login">
                    <input type="email" class="form-control" placeholder="Email address" required />
                    <input type="password" class="form-control passLog" placeholder="Confirm Password" required />
                    <div class="checkbox">
                        <input type="checkbox" id="signupCheckLog" />
                        <label for="signupCheck"> Show password</label>
                    </div>
                    <input type="submit" class="btn bg-emerald btn-success" value="Masuk" />
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
                    <button class="form-control mb-5 btn bg-lg btn-success">Daftar</button>
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
