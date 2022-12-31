

@extends('layouts.blank', ['title' => 'Login'])

@section('body')

    <!-- Top Bar -->
    <section class="top-bar">

        <!-- Brand -->
        <span class="brand">Yeti</span>

        <nav class="flex items-center ltr:ml-auto rtl:mr-auto">

            <!-- Dark Mode -->
            <label class="switch switch_outlined" data-toggle="tooltip" data-tippy-content="Toggle Dark Mode">
                <input id="darkModeToggler" type="checkbox">
                <span></span>
            </label>

            <!-- Fullscreen -->
            <button id="fullScreenToggler"
                class="hidden lg:inline-block ltr:ml-5 rtl:mr-5 text-2xl leading-none la la-expand-arrows-alt"
                data-toggle="tooltip" data-tippy-content="Fullscreen"></button>

            <!-- Register -->
            <a href="{{ url('/register') }}" class="btn btn_primary uppercase ltr:ml-5 rtl:mr-5">Register</a>
        </nav>
    </section>

    <div class="container flex items-center justify-center mt-20 py-10">
        <div class="w-full md:w-1/2 xl:w-1/3">
            <div class="mx-5 md:mx-10">
                <h2 class="uppercase">It’s Great To See You!</h2>
                <h4 class="uppercase">Login Here</h4>
            </div>
            <form class="card mt-5 p-5 md:p-10" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group first">
                <label for="username">E-mail or Username</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

              </div>

              <div class="d-flex mb-4 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>

                <div class="flex items-center">
                    <a href="{{ url('pages/auth/forgot-password') }}" class="text-sm uppercase">Forgot Password?</a>
                    <button class="btn btn_primary ltr:ml-auto rtl:mr-auto uppercase">Login</button>
                </div>
            </form>
        </div>
    </div>

@endsection
