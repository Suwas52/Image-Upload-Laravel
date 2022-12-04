@extends('dashboard')
@section('list')
<div class="form-group">
    <a href="{{route('create')}}" class="btn btn-primary mx-5 px-4"> Add</a>
</div>
<table class="table table-striped m-5">
    <thead>
        <tr>
            <th scope="col">Id no</th>
            <th scope="col">Name</th>
            <th scope="col">Country</th>
            <th scope="col">Total Games</th>
            <th scope="col">Total Goals</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i= 1;
        @endphp
        @foreach($homes as $value)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$value['country']}}</td>
            <td>{{$value['total_games']}}</td>
            <td>{{$value['total_goals']}}</td>
            <td>
                <a href="{{url('/edit/'.$value->id)}}" class="btn btn-primary">Update</a>
                <a href="{{url('/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection