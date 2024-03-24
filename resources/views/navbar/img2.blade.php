<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mobile Skin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <link rel="stylesheet" href="{{ asset('assetsfront/bootstrap/css/bootstrap.min.css') }}">
	     <link rel="stylesheet" href="{{asset('assetsfront/bootstrap/css/font-awesome.min.css')}}">
	     <script src="{{asset('assetsfront/bootstrap/js/bootstrap.bundle.min.js')}}" type="text/javascript" charset="utf-8" async defer></script> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-switch@3.3.4/dist/js/bootstrap-switch.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="path/to/bootstrap.min.css" rel="stylesheet">
        {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
        {{-- <script src="path/to/jquery.min.js"></script>
        <script src="path/to/popper.min.js"></script>
        <script src="path/to/bootstrap.min.js"></script> --}}


       
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
    /* .search-bar {
  width: 20%;
  height: 6px;
  padding: 5px;
  font-size: 10px;
  border: 1px solid #ccc; 
  border-radius: 3px; 
  margin-top: 4px;
} */

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
  font-size: 30px;
  border-radius: 50%;
  padding: 10px;

}
.fa-envelope {
  background:transparent;
  color: white;
  font-size: 28px;
  border-radius: 50%;
  padding: 10px;

}
.fa-phone {
  background:transparent;
  color: white;
  font-size: 38px;
  border-radius: 50%;
  padding: 10px;

}




</style>



      <body>

        {{-- @foreach ($content as $content) --}}
        @if ($content)


        <div class="smartphone">
          <div class="content">

              <div class="header-img">
                  <div class="container">
                    <div class="row justify-content-center align-items-center">
                      <div class="col-2 d-flex justify-content-center">
                  
                        <div class="social-icons">

                          <i class="fa fa-barcode" aria-hidden="true"></i>

                      </div></div>
                      <div class="col-8 mt-2">
                        <form action="/action_page.php">
                          <input type="text" class="rounded" placeholder="Search.." name="search">
                          {{-- <button type="submit"><i class="fa fa-search"></i></button> --}}
                        </form>
                      </div>
                      <div class="col-2 d-flex justify-content-center">
                <div class="social-icons">
             <a href="#" class="message-icon"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        </div>
      </div>

                  {{-- </div>
                </div> --}}
                <br>
                <div class="row justify-content-center align-items-center">
                  <div class="col-2 d-flex justify-content-center">
              
          <img class="rounded" src="{{asset($content->product_img)}}" height="60" width="60">
          <br>

            </div>

             <div class="col-8 mt-2">
            <div class="dynamic-heading">
                {{-- <h5>Dolphin Supplier</h5> --}}
                <h5>{{$content->heading}}</h5>
                <p>{{$content->description}} </p>
              </div>
              <div class="social-icons">
                @if($content->facebook)
                    <a href="{{ $content->facebook }}" class="fa fa-facebook"></a>
                @endif
                @if($content->twitter)
                    <a href="{{ $content->twitter }}" class="fa fa-twitter"></a>
                @endif
                @if($content->instagram)
                    <a href="{{ $content->instagram }}" class="fa fa-instagram"></a>
                @endif
                @if($content->youtube)
                    <a href="{{ $content->youtube }}" class="fa fa-youtube"></a>
                @endif
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <div class="social-icons">
              <a href="tel:03002345786" class="fa fa-phone fa-2x"></a>
            </div>
          </div>
          </div>

        </div>
      </div>
{{-- @endforeach --}}
@else
<p>No content available</p>
@endif
<br>



    </div>
  </div>
      </body>
</html>
