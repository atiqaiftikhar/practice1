@extends('layouts.masterback')
@section('content')
@include('alert')
<br>

    <div class="container">
        <h2>Content</h2>
        <div class="text-end mb-4">
            <div>
                <a class="btn btn-success " href="{{ route('content.create') }}">Create</a>
            </div></div>
<table class="table table-stripped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>heading</th>
            <th>description</th>
            <th>facebook</th>
            <th>instagram</th>
            <th>Youtube</th>
            <th>Twitter</th>
            <th>Product Image</th>
            <th>Products</th>
            <th>Phone No</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($content as $content)
        <tr>
            <td>{{ $content->id }}</td>
            <td>{{ $content->heading }}</td>
            <td>{{ $content->description }}</td>
            <td>{{ $content->facebook }}</td>
            <td>{{ $content->instagram }}</td>
            <td>{{ $content->youtube }}</td>
            <td>{{ $content->twitter }}</td>
            <td>{{ $content->product_img}}</td>
            <td>{{ $content->products }}</td>
            <td>{{ $content->phone_no }}</td>

            <td><a class="btn btn-primary" href="{{ route('content.edit',['id'=>$content->id ]) }}"><i class="fa fa-edit"></i>Edit</a>
            <a class="btn btn-danger" href="{{ route('content.delete',['id'=>$content->id ]) }}" ><i class="fa fa-trash"></i>Delete</a></td>
        </tr>
        @endforeach


    </tbody>
</table>
</div>

@endsection
