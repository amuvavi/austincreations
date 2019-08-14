

@extends('layouts.master')

@section('content')
  
  <!-- HOME SECTION -->
  <header id="home-section">
    <div class="dark-overlay">
      <div class="home-inner container">
        <div class="row">
          <div class="col-lg-8 d-none d-lg-block">
            <h1 class="display-4">Get a quote for
              <strong>your </strong> BBBEE
              <strong>assessment</strong>
            </h1>
            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, tempore iusto in minima facere dolorem!
              </div>
            </div>

            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, tempore iusto in minima facere dolorem!
              </div>
            </div>

            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, tempore iusto in minima facere dolorem!
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card bg-primary text-center card-form">
              <div class="card-body">
                <h3>Sign Up Today</h3>
                <p>Please Click down here to register</p>
                <a class="btn btn-secondary" href="{{route('register')}}">Register </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- EXPLORE HEAD -->
  <section id="explore-head-section">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4">Explore</h1>
          <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium
            deserunt reprehenderit sunt minus.</p>
          <a href="{{route('login')}}" class="btn btn-outline-secondary">Log in</a>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPLORE SECTION -->
  <section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/explore-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>Explore & Connect</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquid
            tempore perspiciatis repudiandae hic?</p>
          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?
            </div>
          </div>

          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CREATE HEAD -->
  <section id="create-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4">Create</h1>
          <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium
            deserunt reprehenderit sunt minus.</p>
          <a href="#" class="btn btn-outline-light">Find Out More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CREATE SECTION -->
  <section id="create-section" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-2">
          <img src="img/create-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6 order-1">
          <h3>Create Your Passion</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquid
            tempore perspiciatis repudiandae hic?</p>
          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?
            </div>
          </div>

          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SHARE HEAD -->
  <section id="share-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4">Share</h1>
          <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium
            deserunt reprehenderit sunt minus.</p>
          <a href="#" class="btn btn-outline-light">Find Out More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SHARE SECTION -->
  <section id="share-section" class="bg-light text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/share-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>Share What You Create</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquid
            tempore perspiciatis repudiandae hic?</p>
          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?
            </div>
          </div>

          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection


