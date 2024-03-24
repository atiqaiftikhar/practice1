@extends('layouts.masterfront')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-md-4">
       <h1>Sale</h1>
       <h2>UpTo 50% Off</h2>
        </div>

        <div class="col-md-4">
        <img src="">
    
        </div>

        <div class="col-sm-2"> </div>
    </div>

</div>



<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Your Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Welcome to Your Website</h1>
      <p class="lead">This is a simple example of a mobile-friendly webpage using Bootstrap.</p>
      <hr class="my-4">
      <p>It uses responsive design to adapt to various screen sizes.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



@endsection