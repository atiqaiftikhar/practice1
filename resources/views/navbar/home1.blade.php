@extends('layouts.masterfront')
@section('content')
<br><br><br>
<div class="container">
<div id="demo" class="carousel slide" data-bs-ride="carousel">


    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>

    <div class="carousel-inner">
        @foreach ($banner as $key => $banner)
        {{-- @if(!$banner->isExpired()) --}}
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ asset($banner->image) }}" alt="" class="d-block w-100">
            </div>
            {{-- @endif --}}
        @endforeach
    </div>

    {{-- <div class="carousel-inner">
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
    </div> --}}

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

</div>
@endsection
