@extends('layouts.masterback')
@section('content')
@include('alert')
<br><br><br>

    <div class="container">
        <div class="text-end mb-4">
            <div>
                <a class="btn btn-success " href="{{ route('banner.create') }}">Create</a>
            </div></div>
<table class="table table-stripped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Rank</th>
            <th>Expiry_Date</th>
            <th>URL</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($banner as $banner)
        <tr>
            <td>{{ $banner->id }}</td>
            <td>{{ $banner->image }}</td>
            <td>{{ $banner->rank }}</td>
            <td>{{ $banner->expiry_date }}</td>
            <td>{{ $banner->url }}</td>
            <td><a class="btn btn-primary" href="{{ route('banner.edit',['id'=>$banner->id ]) }}"><i class="fa fa-edit"></i>Edit</a>
            <a class="btn btn-danger" href="{{ route('banner.delete',['id'=>$banner->id ]) }}" ><i class="fa fa-trash"></i>Delete</a></td>
        </tr>
        @endforeach


    </tbody>
</table>
</div>

@endsection
