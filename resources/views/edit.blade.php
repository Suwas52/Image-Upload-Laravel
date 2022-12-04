@extends('dashboard')
@section('content')
<form action="{{route('update')}}" method="post">
    @csrf

    <div class="container m-5">
        <div class="row border ">
            <div class="form-group">
                <input type="hidden" name="id" value="{{$homes->id}}">
                <label for="name" class="mb-2 fs-2">Name</label>
                <input class="form-control py-3" name="name" placeholder="Enter the player name"
                    value="{{$homes->name}}">
            </div>
            <div class="form-group ">
                <label for="country" class="mb-2 fs-2">Country</label>
                <input class="form-control py-3" name="country" placeholder="Country" value="{{$homes->country}}">
            </div>
            <div class="form-group ">
                <label for="game" class="mb-2 fs-2">Total Game</label>
                <input class="form-control py-3" name="total_games" placeholder="Total Game"
                    value="{{$homes->total_games}}">
            </div>
            <div class="form-group ">
                <label for="goal" class="mb-2 fs-2">Total Goal</label>
                <input class="form-control py-3 mb-3" name="total_goals" placeholder="Total goal"
                    value="{{$homes->total_goals}}">
            </div>
            <div class="form-group ">
                <button type="submit " class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </div>
</form>

@endsection