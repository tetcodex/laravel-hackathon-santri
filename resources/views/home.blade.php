@extends('_layouts.homepage')

@section('banner')
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <x-navbar />
        <div class="col-6">
          <h1 class="font-weight-light">Karsa</h1>
          <p class="lead">Grow With Us Brighter</p>
        </div>
        <div class="col-6 text-center">
            <div class="row">
                <div class="card align-items-center">
                    <div class="card-body">
                      <svg class="bi">
                        <use xlink:href="{{ url('assets/bootstrap/icon/bootstrap-icons.svg#star')}}"/>
                      </svg>
                      <h5 class="card-title">Find Your Dream</h5>
                      <p class="card-text">A Lot of Jobs Wait you here </p>
                      <a href="#" class="btn btn-primary">Find Out</a>
                    </div>
                </div>

                <div class="card align-items-center">
                      <div class="card-body">
                        <svg class="bi">
                          <use xlink:href="{{ url('assets/bootstrap/icon/bootstrap-icons.svg#person-circle')}}"/>
                        </svg>
                        <h5 class="card-title">Dive Into Our Ecosystem</h5>
                        <p class="card-text">With Joining our ecosystem, you will be provided various feature</p>
                        <a href="#" class="btn btn-primary">Login</a>
                      </div>
                </div>

                <div class="card align-items-center">
                      <div class="card-body">
                        <svg class="bi">
                          <use xlink:href="{{ url('assets/bootstrap/icon/bootstrap-icons.svg#gear')}}"/>
                        </svg>
                        <h5 class="card-title">Upgrade Your Skill</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                </div>

            </div>
        </div>
      </div>
    </div>
  </header>

    <div class="container">
        <h2>About Us</h2>
        <p>We Work with it</p>
    </div>
  <hr>
  <footer>
      This is Footer Website
  </footer>
@endsection

