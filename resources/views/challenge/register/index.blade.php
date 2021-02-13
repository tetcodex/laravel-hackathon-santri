@extends('_layouts.admin')

@section('content')

<div class="container">
  
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin">

          <div class="card-body">

            <h5 class="card-title text-center">Sign Up</h5>

            <form class="form-signin">

                <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
                    <label for="inputEmail">User Name</label>
                </div>

                <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>

                <div class="text-center">
                    <button class="btn btn-md btn-primary btn-block text-uppercase" type="submit">Sign Up</button>
                    <hr class="my-4">
                </div>

            </form>

            <form class="form-signin" action="">

                <div class="text-center">
                    <button class="btn btn-md btn-google btn-block text-uppercase" type="submit"><i class="bi bi-google mr-2"></i> Sign Up with Google</button>
                    <button class="btn btn-md btn-facebook btn-block text-uppercase" type="submit"><i class="bi bi-facebook mr-2"></i> Sign Up with Facebook</button>
                </div>

            </form>
          </div>

        </div>
      </div>
    </div>
</div>

@endsection

