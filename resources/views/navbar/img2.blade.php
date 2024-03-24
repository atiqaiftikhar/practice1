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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  height: 720px;
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
      height: 200px; 
    }
    .search-bar {
  width: 20%; 
  height: 8px; 
  /* margin: 8px auto;  */
  padding: 3px; 
  font-size: 12px; 
  border: 1px solid #ccc; /* Add a border */
  border-radius: 3px; /* Add border radius */
  margin-top: 5px; 
}

.dynamic-heading {
  font-size: 10px;
  color: #ffffff;
  margin-top: 2px;
  margin-bottom: 5px; 
}

.social-icons {
  margin-top: 2px;
}

/* .social-icons a {
  display: inline-block;
  margin-right: 10px;
  color: #ffffff;
  font-size: 30px;
} */
.social-icons a {
  display: inline-block;
  margin-right: 6px; /* Adjusted margin for spacing */
  color: #ffffff;
  font-size: 15px; /* Adjusted font size */
}


/* Additional styles for individual social media icons (you can customize as needed) */
.social-icons a:hover {
  color: #d4dae0; /* Change color on hover */
}
.fa-facebook {
  background: #3B5998;
  color: white;
  border-radius: 60%;
  padding: 7px;


}

.fa-twitter {
  background: #55ACEE;
  color: white;
  border-radius: 50%;
  padding: 5px;
}

.fa-youtube {
  background: #bb0000;
  color: white;
  border-radius: 50%;
  padding: 5px;


}

.fa-instagram {
  background: #88124d;
  color: white;
  border-radius: 50%;
  padding: 5px;

}
.fa-barcode {
  background:transparent;
  color: white;
 height: 50;
 width: 70;
  border-radius: 50%;
  padding: 6px;

}




</style>

      <body>



<div class="smartphone">
    <div class="content">
      
        <div class="header-img">
            <div class="container">
              <div class="row justify-content-center align-items-center">
                <div class="col-sm-2">
                  <div class="social-icons">
                 
                    <i class="fa fa-barcode" aria-hidden="true"></i>

                </div></div>
                <div class="col-sm-8">
                  <form class="form-inline mt-3">
                    <input class="form-control mr-sm-1" class="search-bar" type="text" placeholder="Search Products..." aria-label="Search">
                    {{-- <button class="search-button" type="submit">Search</button> --}}
                  </form>    
                </div>
                <div class="col-sm-2">
                </div>
              </div>
            {{-- </div>
          </div> --}}
          <br>
          <div class="row justify-content-center align-items-center">
            <div class="col-sm-3 d-flex justify-content-center">
          <img class="rounded" src={{ asset('assetsfront/img/supplier.png')}} height="60" width="60">
          <br>
           
            </div>
      
            <div class="col-sm-7">
            <div class="dynamic-heading">
                <h5>Dolphin Supplier</h5>
                <p>Look Behind the Taste Because Colour of Life with Health </p>
              </div>
              <div class="social-icons">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-youtube"></a>
              </div>
          </div>
          <div class="col-sm-2 d-flex justify-content-center">
            <div class="social-icons">
              <a href="tel:+1234567890" class="fa fa-phone"></a>
            </div>
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
