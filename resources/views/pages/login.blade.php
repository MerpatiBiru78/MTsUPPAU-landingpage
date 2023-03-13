@extends('back')
@section('login')
    <main class="d-flex justify-content-center p-4 bg-wave">
        <section class="wrapper bg-lg">
            <div class="form signup ">
                <header>Login</header>
                <form action="#">
                    <input type="text" placeholder="Email address" required />
                    <input type="password" placeholder="Password" required />
                    <a href="#">Forgot password?</a>
                    <input type="submit" class="btn btn-success" value="Login" />
                </form>

            </div>

            <div class="form login bg-emerald align-content-center">
                <header>Signup</header>
                <form action="#">
                    <input type="text" placeholder="Full name" required />
                    <input type="text" placeholder="Email address" required />
                    <input type="password" placeholder="Password" required />
                    <div class="checkbox">
                        <input type="checkbox" id="signupCheck" />
                        <label for="signupCheck">I accept all terms & conditions</label>
                    </div>
                    <input type="submit" class="mb-5 btn btn-primary" value="Signup" />
                </form>
            </div>

            <script>
                const wrapper = document.querySelector(".wrapper"),
                    signupHeader = document.querySelector(".signup header"),
                    loginHeader = document.querySelector(".login header");

                loginHeader.addEventListener("click", () => {
                    wrapper.classList.add("active");
                });
                signupHeader.addEventListener("click", () => {
                    wrapper.classList.remove("active");
                });
            </script>
        </section>
    </main>
@endsection
