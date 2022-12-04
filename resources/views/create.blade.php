@extends('dashboard')
@section('content')
<form action="{{route('store')}}" method="post">
    @csrf

    <div class="container m-5">
        <div class="row border ">
            <div class="form-group">
                <label for="name" class="mb-2 fs-2">Name</label>
                <input class="form-control py-3" name="name" placeholder="Enter the player name">
            </div>
            <div class="form-group ">
                <label for="country" class="mb-2 fs-2">Country</label>
                <input class="form-control py-3" name="country" placeholder="Country">
            </div>
            <div class="form-group ">
                <label for="game" class="mb-2 fs-2">Total Game</label>
                <input class="form-control py-3" name="total_games" placeholder="Total Game">
            </div>
            <div class="form-group ">
                <label for="goal" class="mb-2 fs-2">Total Goal</label>
                <input class="form-control py-3 mb-3" name="total_goals" placeholder="Total goal">
            </div>
            <div class="form-group ">
                <label for="image" class="mb-2 fs-2">Player Image</label>
                <input type="file" class="form-control py-3 mb-3" name="image" placeholder="Player Image">
            </div>
            <div class="form-group ">
                <button type="submit " class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </div>
</form>

@endsection