@extends('layouts.masterback')
@section('content')
<br>
<div class="container">
    <h2>Content form</h2>
    <form action="{{ $content->id !=null ? route('content.update',['id'=>$content->id]): route('content.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="heading">Heading</label>
            <input  type="text" class="form-control " id="heading" name="heading" value="{{ $content->heading }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $content->description ?? '' }}</textarea>

        </div>
        <div class="form-group">
            <label for="phone_no">Phone Number:</label>
            <input type="tel" class="form-control" id="phone_no" name="phone_no" value="{{ $content->phone_no ?? old('phone_no') }}" >
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $content->facebook }}">
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $content->twitter }}">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $content->instagram }}">
        </div>
        <div class="form-group">
            <label for="youtube">YouTube</label>
            <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $content->youtube}}">
        </div>
        {{-- <div class="form-group">
            <labelrequired for="product_img">Product Image</labelrequired>
            <input type="file" class="form-control" id="product_img" name="product_img" required>
            @if($content->product_img)
            <img src="{{ asset($content->product_img) }}" alt="Product Image" class="img-fluid mt-2" style="max-height: 200px;">
        @endif
        </div> --}}
        @if($content->product_img)
    <img src="{{ asset($content->product_img) }}" alt="Product Image" class="img-fluid mt-2" style="max-height: 200px;">
@endif

<div class="form-group">
    <label for="product_img">Product Image</label>
    <input type="file" class="form-control" id="product_img" name="product_img">
</div>
        <div class="form-group">
            <label  for="products">Products</label>
            <input type="text" class="form-control" id="products" name="products" value="{{ $content->products }}" required>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection
