<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mobile Skin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('assetsfront/bootstrap/css/bootstrap.min.css') }}">
	     <link rel="stylesheet" href="{{asset('assetsfront/bootstrap/css/font-awesome.min.css')}}">
	     <script src="{{asset('assetsfront/bootstrap/js/bootstrap.bundle.min.js')}}" type="text/javascript" charset="utf-8" async defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-switch@3.3.4/dist/js/bootstrap-switch.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="path/to/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="path/to/jquery.min.js"></script>
        <script src="path/to/popper.min.js"></script>
        <script src="path/to/bootstrap.min.js"></script>


      </head>
      <br><br>
      <style>

        .navbar-brand {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;

}

 body{
   background-image: url('asssets/img/background.png');
 background-size: cover;
  background-position: center;
  height: 100%;
  width: 100%;
  padding-top: 60px; 

}
.jumbotron {
      margin-top: 20px;
    }

    .smartphone {
  position: relative;
  width: 360px;
  height: 640px;
  margin: auto;
  border: 16px black solid;
  border-top-width: 60px;
  border-bottom-width: 60px;
  border-radius: 36px;
}

.smartphone:before {
  content: '';
  display: block;
  width: 60px;
  height: 5px;
  position: absolute;
  top: -30px;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #333;
  border-radius: 10px;
}

/* The circle on the bottom of the device */
.smartphone:after {
  content: '';
  display: block;
  width: 35px;
  height: 35px;
  position: absolute;
  left: 50%;
  bottom: -65px;
  transform: translate(-50%, -50%);
  background: #333;
  border-radius: 50%;
}


.smartphone .content {
  width: 100%; 
  max-width: 360px;
  height: auto; 
  background: white;
  overflow: hidden; 
}

.header-img {
      background-image: url('{{ asset('assetsfront/img/header1.jpg') }}'); /* Replace 'your-image-url.jpg' with your actual image URL */
      background-size: cover;
      background-position: center;
      height: 180px; 
    }
    .search-bar {
  width: 30%; /* Adjust the width as needed */
  height: 10px; /* Adjust the height as needed */
  margin: 10px auto; /* Center the search bar */
  padding: 5px; /* Add padding for better appearance */
  font-size: 16px; /* Adjust font size */
  border: 1px solid #ccc; /* Add a border */
  border-radius: 5px; /* Add border radius */
}

.dynamic-heading {
  font-size: 10px;
  color: #ffffff;
  margin-top: 10px;
}

/* Style for social media icons */
.social-icons {
  margin-top: 5px;
}

.social-icons a {
  display: inline-block;
  margin-right: 10px;
  color: #ffffff;
  font-size: 30px;
}

/* Additional styles for individual social media icons (you can customize as needed) */
.social-icons a:hover {
  color: #007bff; /* Change color on hover */
}




</style>

      <body>



<div class="smartphone">
    <div class="content">
      
        <div class="header-img">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-sm-8">
                  <form class="form-inline mt-3">
                    <input class="form-control mr-sm-1" class="search-bar" type="text" placeholder="Search Products..." aria-label="Search">
                    {{-- <button class="search-button" type="submit">Search</button> --}}
                    <div class="dynamic-heading">
                        <h6>Dolphin Supplier</h6>
                        <p>Look Behind the Taste Because Colour of Life with Health </p>
                      </div>
                      <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        
                      </div>
                  
                  </form>
                </div>
              </div>
            </div>
          </div>
          <br>

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


    </div>
  </div>
      </body>
</html>
