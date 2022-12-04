@extends('dashboard')
@section('list')
<div class="form-group">
    <a href="{{route('create')}}" class="btn btn-primary mx-5 px-4"> Add</a>
</div>


@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
@endif

<table class="table table-striped m-5">
    <thead>
        <tr>
            <th scope="col">Id no</th>
            <th scope="col">Name</th>
            <th scope="col">Country</th>
            <th scope="col">Total Games</th>
            <th scope="col">Total Goals</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i= 1;
        @endphp
        @foreach($homes as $value)
        <tr>
            <td class="pt-5">{{$i++}}</td>
            <td class="pt-5">{{$value['name']}}</td>
            <td class="pt-5">{{$value['country']}}</td>
            <td class="pt-5">{{$value['total_games']}}</td>
            <td class="pt-5">{{$value['total_goals']}}</td>
            <td><img src="images/{{$value['image']}}" alt="" style="width: 100px; height:100px;"></td>
            <td class="pt-5">
                <a href="{{url('/edit/'.$value->id)}}" class="btn btn-primary">Update</a>
                <a href="{{url('/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection