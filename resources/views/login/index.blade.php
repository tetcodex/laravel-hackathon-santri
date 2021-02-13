@extends('_layouts.login')

@section('banner')
  <header class="cover-bg">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <x-navbar />
        <div class="col-5">

        </div>
        <div class="col-7">
            <div class="card">
                <div class="card-body text-center">
                  <h3>Login Page</h3>
                  <svg class="bi">
                    <use xlink:href="{{ url('assets/bootstrap/icon/bootstrap-icons.svg#star')}}"/>
                  </svg>
                    <form class="form-signin">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </header>
@endsection
