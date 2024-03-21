<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Practice</title>
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
/* .navbar-nav i {
  margin-right: 6px;
}
 .navbar-nav .nav-link {
  transition: all 0.3s ease-in-out;
 }

.navbar-nav .nav-link:hover {
  color: #2487c0;
   transform: translateY(-5px);

} */


 body{
   background-image: url('asssets/img/background.png');
 background-size: cover;
  background-position: center;
  height: 100%;
  width: 100%;
}

</style>

      <body>

          <nav class="navbar navbar-expand-lg  navbar-dark bg-black fixed-top">

            <div class="container">
                <a class="navbar-brand" href="#" style="color: #2487c0">Practice   </a>
              &nbsp;&nbsp;  &nbsp;&nbsp;

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item ">
                    <a class="nav-link " href="/">
                      <i  class="fa fa-home text-white"></i>
                      Home
                      </a></li>






              </div>
            </div>
          </nav>



      @yield('content')



      <hr>


      <p class="text-center">© Copyright {{ date('Y') }} | All Rights Reserved | <a
        href=""></a></p>



</body>
</html>
