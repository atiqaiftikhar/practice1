<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mobile Skin Example</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    /* Custom styles go here */
    body {
      padding-top: 60px; /* To adjust for fixed navbar */
    }
    .jumbotron {
      margin-top: 20px;
    }
    .header-img {
      background-image: url('{{ asset('assetsfront/img/header.png') }}'); /* Replace 'your-image-url.jpg' with your actual image URL */
      background-size: cover;
      background-position: center;
      height: 300px; /* Adjust the height as needed */
    }
  </style>
</head>
<body>

  <!-- Navbar -->
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

  <!-- Header with Image -->
  <div class="header-img">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <!-- Search bar -->
          <form class="form-inline mt-3">
            <input class="form-control mr-lg-3" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-4 my-lg-2" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container mt-4">
    @extends('layouts.masterfront')
    @section('content')
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>
    
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('assetsfront/img/s1.png')}}" alt="" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assetsfront/img/s2.png')}}" alt="" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assetsfront/img/s3.png')}}" alt="" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assetsfront/img/s4.png')}}" alt="" class="d-block w-100">
          </div>
        </div>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    @endsection
  </div>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
