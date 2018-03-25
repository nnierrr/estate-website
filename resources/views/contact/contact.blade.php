@extends('layout')
@include('nav.nav')

@section('head')

    <link href="/css/landing.css" rel="stylesheet">

@endsection


@section('content')

<header id="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto text-center">
        <h1>Contact Us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, similique!</p>
      </div>
    </div>
  </div>
</header>

<!-- Contact -->
<section id="blog" class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card p-4">
          <div class="card-body">
            <h4>Get In Touch</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <h4>Address</h4>
            <p>550 Main st Boston MA</p>
            <h4>Email</h4>
            <p>test@test.com</p>
            <h4>Phone</h4>
            <p>(555) 555-5555</p>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card p-4">
          <div class="card-body">
            <h3 class="text-center">Please Fill out this form to contact</h3>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone Number">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea type="text" class="form-control" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="submit" class="btn btn-outline-danger btn-block">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Staff Section -->
<section id="staff" class="py-5 text-center bg-dark text-white">
  <div class="container">
    <h1>Our Staff</h1>
    <br>
    <div class="row">
      <div class="col-md-3">
        <img src="/images/person1.jpg" alt="" class="img-fluid rounded-circle mb-2">
        <h4>Jane Doe</h4>
        <small>Marketing Manager</small>
      </div>
      <div class="col-md-3">
        <img src="/images/person2.jpg" alt="" class="img-fluid rounded-circle mb-2">
        <h4>Sarah Williams</h4>
        <small>Business Manager</small>
      </div>
      <div class="col-md-3">
        <img src="/images/person3.jpg" alt="" class="img-fluid rounded-circle mb-2">
        <h4>John Doe</h4>
        <small>CEO</small>
      </div>
      <div class="col-md-3">
        <img src="/images/person4.jpg" alt="" class="img-fluid rounded-circle mb-2">
        <h4>Steve Smith</h4>
        <small>Web Developer</small>
      </div>
    </div>
  </div>
</section>


<footer id="main-footer" class="text-center p-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <p>Copyright 2018 &copy; Herrera</p>
      </div>
    </div>
  </div>
</footer>

@endsection
