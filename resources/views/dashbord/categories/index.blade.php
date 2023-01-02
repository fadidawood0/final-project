@extends('pages.dashbord')
@section('title','categories')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>paren_id</th>
            <th>created_at</th>
            <th></th>
        </tr>
    </thead>
    <tbody>@foreach($categories as $categori)
        <tr>
            <td>{{$categori->id}}</td>
            <td><strong>{{$categori->name}}</strong>
            <br><span class="text-muted">{{$categori->slug}}</span></td>
            <td>{{$categori->parent_id}}</td>
            <td>{{$categori->created_at}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
