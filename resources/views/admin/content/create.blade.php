@extends('layouts.masterback')
@section('content')
<br>
<div class="container">
    <h2>Content form</h2>
    <form action="{{ $content->id !=null ? route('content.update',['id'=>$content->id]): route('content.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="heading">Heading</label>
            <input type="text" class="form-control" id="heading" name="heading" value="{{ $content->heading }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"  value="{{ $content->description }}"></textarea>
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
        <div class="form-group">
            <label for="product_img">Product Image</label>
            <input type="file" class="form-control" id="product_img" name="product_img">
        </div>
        <div class="form-group">
            <label for="products">Products</label>
            <textarea class="form-control" id="products" name="products" value="{{ $content->products }}"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection
