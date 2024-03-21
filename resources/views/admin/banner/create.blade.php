@extends('layouts.masterback')
@section('content')
<br><br><br>
<div class="container">
    <form action="{{ $banner->id !=null ? route('banner.update',['id'=>$banner->id]): route('banner.store') }}" method="post" enctype="multipart/form-data">
   
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="rank" class="form-label">Rank</label>
            <input type="number" class="form-control" id="rank" name="rank" required>
        </div>
        <div class="mb-3">
            <label for="expiry_date" class="form-label">Expiry Date</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="text" class="form-control" id="url" name="url" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection