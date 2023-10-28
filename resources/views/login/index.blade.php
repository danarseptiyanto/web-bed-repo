@extends('layouts.main2')

@section('container')
<style>
body{
    background: #FBF7EC;
    background-image: url("/img/hero-landing-page.svg");
    background-repeat: no-repeat;
    background-position: center;
}
</style>
<div class="login-form-container">
            <form action="/login" method="POST">
                @csrf
                <ul>
                    <a href="/"><img class src="img/logo-login-signin.svg" alt=""></a>
                    @if (session()->has('success'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <li>
                        <input class="login-form" type="email" name="email" id="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror " required value={{ old('email') }}>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </li>
                    <li>
                        <input class="login-form"  type="password" name="password" id="password" class="form-control" placeholder="Password"
                            required>
                    </li>
                    <li>
                        <button type="submit" name="login" class="btn btn-primary" value="LOGIN">Submit</button>
                    </li>
                    <li class="emangtelat">Belum punya akun?<a href="/register"> <b>Daftar Disini Yuk!</b></a></li>
                </ul>
            </form>
        </section>

    </div>
</div>
@endsection
